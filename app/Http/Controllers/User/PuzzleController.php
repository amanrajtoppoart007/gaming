<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Puzzle;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PuzzleController extends Controller
{
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
              if(Solution::where(['puzzle_id'=>$request->input('puzzle_id'),'option_id'=>$request->input('option_id')])->first())
              {
                  $result = ["status" => 1, "response" => "success", "message" => "Yah! It is correct answer"];
                  $puzzle = Puzzle::find($request->input('puzzle_id'));
                  $next_level = $puzzle->level + 1;
                  $nextPuzzle = Puzzle::where(['level' => $next_level])->first();
                  if ($nextPuzzle) {
                      $result['next_url'] = route('puzzle.view', $nextPuzzle->id);
                  }
              }
              else
              {
                  $result = ["status"=>0,"response"=>"error","message"=>"Oops! Wrong answer, please try again"];
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
