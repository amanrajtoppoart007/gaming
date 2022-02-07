<?php

namespace App\Http\Controllers\User;

use App\Models\Puzzle;
use App\Models\User;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        $isExist = Puzzle::orderBy('level','ASC')->first();
        if(!$isExist)
        {
            abort(404,"No puzzle in the game yet,please stay tune");
        }

        $userPuzzle = User::where(['id'=>auth()->user()->id])->first()->puzzles()->orderBy('level','DESC')->first();

        if($userPuzzle)
        {
            $puzzle = Puzzle::orderBy('level','DESC')->first();
            if($userPuzzle->level===$puzzle->level)
            {
                $route = route('puzzle.result');
                $type = 'result';
            }
            else
            {
                $nextLevel = $userPuzzle->level + 1;
                $nextPuzzle = Puzzle::where(['level'=>$nextLevel])->first();
                if($nextPuzzle)
                {
                    $route = route('puzzle.view',$nextPuzzle->id);
                     $type = 'next';
                }
                else
                {
                    $route = route('puzzle.result');
                    $type = 'result';
                }
            }

        }
        else
        {
            $puzzle = Puzzle::orderBy('level','ASC')->first();
             $route = route('puzzle.view',$puzzle->id);
             $type = 'new';
        }
        $puzzle = Puzzle::orderBy('level','ASC')->first();
        return view('user.home',compact('route','type','puzzle'));
    }
}
