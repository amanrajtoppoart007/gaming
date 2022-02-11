<?php

namespace App\Http\Controllers;

use App\Models\Puzzle;
use App\Models\Score;
use App\Models\UserPuzzle;
use App\Http\Controllers\Traits\UserPuzzleTrait;
class WelcomeController extends Controller
{
    use UserPuzzleTrait;

    /**
     * @param $userId
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
     public function result($userId)
    {
        $puzzles = Puzzle::all()->pluck('id')->toArray();
        if(empty($puzzles))
        {
            return view("user.empty");
        }

        //then check score of the user with respect to puzzles
        $score = Score::where([
            'user_id'=>$userId,
        ])->whereIn('puzzle_id',$puzzles)->sum('score');

        //total puzzle count
        $count = Puzzle::count();
           //total time taken by user
        $timeTaken = UserPuzzle::where([
            'user_id'=>$userId,
            'is_solved'=>1,
        ])->whereIn('puzzle_id',$puzzles)->sum('time_taken');

        //user rating
        $rating = $score/($count?:1);
         //max score
        $maxScore = $count * 3;
        $user = auth()->user();
        $ratingHtml = $this->formatScore($rating);
        return view("guest.puzzle.result",compact('rating','score','maxScore','user','ratingHtml','timeTaken'));
    }

    public function about()
    {
        return view("guest.about");
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function terms()
    {
        return view('terms');
    }
}
