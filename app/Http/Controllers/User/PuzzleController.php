<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Attempt;
use App\Models\Puzzle;
use App\Models\Score;
use App\Models\Solution;
use App\Models\User;
use App\Models\UserPuzzle;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Traits\ScoreCalculationTrait;
use App\Http\Controllers\Traits\UserPuzzleTrait;

class PuzzleController extends Controller
{
    use ScoreCalculationTrait,UserPuzzleTrait;
    public function __construct()
    {
        $this->middleware("auth");
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function index()
    {

         $list = Puzzle::all();
         $i=0;
         $puzzles = [];
         foreach($list as $puzzle)
         {
            $puzzles[$i]['id'] = $puzzle->id;
            $puzzles[$i]['level'] = $puzzle->level;
            $userPuzzle = UserPuzzle::where(['user_id'=>auth()->user()->id])->get()->pluck('puzzle_id')->toArray();

            if($userPuzzle)
            {
               $puzzles[$i]['is_locked'] = in_array($puzzle->id,$userPuzzle)?'unlocked':'locked';
            }
            else if($puzzle->level=='1')
            {
                  $puzzles[$i]['is_locked'] = 'unlocked';
            }
            else
            {
                 $puzzles[$i]['is_locked'] = 'locked';
            }
             $puzzles[$i]['user_score'] = auth()->user()->user_score;

            $puzzles[$i]['solutions'] = $puzzle->solutions?->preview;
            $puzzles[$i]['question'] = $puzzle->question?->preview;
            $i++;
         }
         return view("user.puzzle.index",compact('puzzles'));
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


        $token = now()->timestamp;

        if ($check) {
            $check->update([
                'started_at' => now(),
                'attempts' => $check->attempts + 1,
                'completed_at'=>null
            ]);



            Attempt::where([
                'user_id' => auth()->user()->id,
                'puzzle_id' => $id,
                ])->update([
                'user_id' => auth()->user()->id,
                'puzzle_id' => $id,
                'attempt'=>0,
                'token' => $token
        ]);

        } else {
            UserPuzzle::create([
                'user_id' => auth()->user()->id,
                'puzzle_id' => $id,
                'attempts' => 1,
                'started_at' => now(),
                'is_solved' => '0'
            ]);
            Attempt::create([
                'user_id' => auth()->user()->id,
                'puzzle_id' => $id,
                'attempt' => 0,
                'token' => $token
            ]);
        }

        return view("user.puzzle.view",compact('puzzle','token'));
    }

     /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function replay($id):\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $puzzle = Puzzle::with('options')->find($id);
         $token = now()->timestamp;

        $check = UserPuzzle::where([
            'user_id'=>auth()->user()->id,
            'puzzle_id'=>$id
        ])->first();

        if ($check) {
            $check->update([
                'started_at' => now(),
                'attempts' => $check->attempts + 1,
            ]);
            Attempt::where([
                'user_id' => auth()->user()->id,
                'puzzle_id' => $id,
                ])->update([
                'user_id' => auth()->user()->id,
                'puzzle_id' => $id,
                'attempt'=>0,
                'token' => $token
        ]);
        } else {
            UserPuzzle::create([
                'user_id' => auth()->user()->id,
                'puzzle_id' => $id,
                'attempts' => 1,
                'started_at' => now(),
                'is_solved' => '1'
            ]);
             Attempt::create([
                'user_id' => auth()->user()->id,
                'puzzle_id' => $id,
                'attempt' => 0,
                'token' => $token
            ]);
        }
        return view("user.puzzle.replay",compact('puzzle','token'));
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
                $attempt = Attempt::where([
                    'user_id' => auth()->user()->id,
                    'puzzle_id' => $request->input('puzzle_id'),
                    'token' => $request->input('token'),
                ])->first();
                if ($attempt->attempt == 3) {
                    Score::create([
                        'user_id' => auth()->user()->id,
                        'puzzle_id' => $request->input('puzzle_id'),
                        'score' => '0',
                    ]);

                    $result = ["status" => 0, "response" => "limit_crossed","data"=>$this->formatResponse(), "message" => "Sorry! you exhausted all your tries,reload the puzzle and try again"];
                     return response()->json($result,200);
                } else {
                    $attempt->update(['attempt'=>$attempt->attempt+1]);
                  }
                $userPuzzle->update([
                    'completed_at' => now(),
                    'option_id'=>$request->input('option_id')
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
                    $result = ["status" => 1, "response" => "success","data"=>$this->formatResponse(), "message" => "Yah! It is correct answer"];

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

    public function result()
    {

        //retrieve the all puzzles first
        $puzzles = Puzzle::all()->pluck('id')->toArray();
        if(empty($puzzles))
        {
            return view("user.empty");
        }

        //then check score of the user with respect to puzzles
        $score = Score::where([
            'user_id'=>auth()->user()->id,
        ])->whereIn('puzzle_id',$puzzles)->sum('score');

        //total puzzle count
        $count = Puzzle::count();
           //total time taken by user
        $timeTaken = UserPuzzle::where([
            'user_id'=>auth()->user()->id,
            'is_solved'=>1,
        ])->whereIn('puzzle_id',$puzzles)->sum('time_taken');

        //user rating
        $rating = $score/($count?:1);
         //max score
        $maxScore = $count * 3;
        $user = auth()->user();
        $ratingHtml = $this->formatScore($rating);
        return view("user.puzzle.result",compact('rating','score','maxScore','user','ratingHtml','timeTaken'));
    }
}
