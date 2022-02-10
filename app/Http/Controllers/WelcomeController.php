<?php

namespace App\Http\Controllers;

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
        $score = Score::where([
            'user_id'=>$userId,
        ])->sum('score');
        $count = Score::where([
            'user_id'=>$userId,
        ])->count();
        $timeTaken = UserPuzzle::where([
            'user_id'=>$userId,
            'is_solved'=>1,
        ])->sum('time_taken');
        $rating = $score/$count;
        $maxScore = $count * 3;
        $user = auth()->user();
        $ratingHtml = $this->formatScore($rating);

        //$ranking = Score::where('')->sum();
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
