<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Puzzle;
use App\Models\Score;
use App\Models\Solution;
use App\Models\UserPuzzle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Traits\ScoreCalculationTrait;

class PuzzleController extends Controller
{
    use ScoreCalculationTrait;
    public function __construct()
    {
        $this->middleware("auth");
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function view($id):\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $puzzle = Puzzle::with('options')->find($id);

        $check = UserPuzzle::where([
            'user_id'=>auth()->user()->id,
            'puzzle_id'=>$id
        ])->first();

        if ($check) {
            $check->update([
                'started_at' => now(),
                'attempts' => $check->attempts + 1,
            ]);
        } else {
            UserPuzzle::create([
                'user_id' => auth()->user()->id,
                'puzzle_id' => $id,
                'attempts' => 1,
                'started_at' => now(),
                'is_solved' => 0
            ]);
        }


        return view("user.puzzle.view",compact('puzzle'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function check(Request $request):\Illuminate\Http\JsonResponse
    {
        $validator = Validator::make($request->all(),[
            "puzzle_id"=>"required|numeric",
            "option_id"=>"required|numeric"
        ]);
        if(!$validator->fails())
        {

            $userPuzzle = UserPuzzle::where([
                      'user_id'=>auth()->user()->id,
                      'puzzle_id'=>$request->input('puzzle_id'),
                  ])->first();
            if($userPuzzle)
            {
                $userPuzzle->update([
                    'completed_at' => now()
                ]);
                if (Solution::where(['puzzle_id' => $request->input('puzzle_id'), 'option_id' => $request->input('option_id')])->first()) {

                    $userPuzzle->refresh();
                    $userPuzzle->update(['is_solved'=>1,'time_taken'=>$this->getTimeDifference($userPuzzle->started_at,$userPuzzle->completed_at)]);



                    $score = $this->calculateScore($userPuzzle->started_at,$userPuzzle->completed_at);

                    $scoreData = Score::where([
                      'user_id'=>auth()->user()->id,
                      'puzzle_id'=>$request->input('puzzle_id'),
                  ])->first();

                    if($scoreData)
                    {
                        $scoreData->update([
                            'score' => $score
                        ]);
                    }
                    else
                    {
                        Score::create([
                            'user_id' => auth()->user()->id,
                            'puzzle_id' => $request->input('puzzle_id'),
                            'score'=>$score,
                        ]);
                    }


                    $result = ["status" => 1, "response" => "success", "message" => "Yah! It is correct answer"];
                    $puzzle = Puzzle::find($request->input('puzzle_id'));
                    $next_level = $puzzle->level + 1;
                    $nextPuzzle = Puzzle::where(['level' => $next_level])->first();
                    if ($nextPuzzle) {
                        $result['next_url'] = route('puzzle.view', $nextPuzzle->id);
                    }
                } else {
                    $result = ["status" => 0, "response" => "error", "message" => "Oops! Wrong answer, please try again"];
                }
            }
            else
            {
                $result = ["status" => 0, "response" => "error", "message" => "Oops!Puzzle data not found"];
            }


        }
        else
        {
            $msg = '';
            foreach ($validator->errors()->all() as $error) {
                $msg .= $error . "\n";
            }
              $result = ["status"=>0,"response"=>"validation_error","message"=>$msg];
        }
        return response()->json($result,200);
    }
}
