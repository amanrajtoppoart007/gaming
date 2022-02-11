<?php

namespace App\Http\Controllers\Traits;

use App\Models\Puzzle;
use App\Models\Score;
use App\Models\UserPuzzle;

trait UserPuzzleTrait
{

    /**
     * @return array
     */

    public function formatResponse()
    {
        $next_url = '';
        $puzzle = Puzzle::find(request()->input('puzzle_id'));
        $next_level = $puzzle->level + 1;
        $nextPuzzle = Puzzle::where(['level' => $next_level])->first();
        if ($nextPuzzle) {
            $next_url = route('puzzle.view', $nextPuzzle->id);
        } else {
            $next_url = route('puzzle.result');
        }
        $userPuzzle = UserPuzzle::where(['user_id' => auth()->user()->id, 'puzzle_id' => request()->input('puzzle_id')])->first();
        $score = Score::where(['user_id' => auth()->user()->id, 'puzzle_id' => request()->input('puzzle_id')])->first();

        return [
            "puzzleId" => $puzzle->id,
            "solution_description" => $puzzle->solution_description,
            "nextPuzzleUrl" => $next_url,
            "score" => $score->score,
            "image" => $puzzle->getMedia('solutions')->last()->getUrl(),
            "timeTaken" => $userPuzzle->time_taken,
            "overallAttempts" => $userPuzzle->attempts,
            "startedAt" => $userPuzzle->started_at->format("d/m/Y h:i:s A"),
            "completedAt" => $userPuzzle->completed_at->format("d/m/Y h:i:s A"),
            "rating" => $this->formatScore($score->score),
        ];
    }

    public function formatScore($score)
    {


        if($score===3)
        {
            return '<div class="small-ratings"> <i class="fa fa-star fa-2x rating-color"></i> <i class="fa fa-star fa-2x rating-color"></i> <i class="fa fa-star fa-2x rating-color"></i>  </div>';
        }
        if($score===2)
        {
            return '<div class="small-ratings"> <i class="fa fa-star fa-2x rating-color"></i> <i class="fa fa-star fa-2x rating-color"></i> <i class="fa fa-star fa-2x"></i> </div>';
        }

        if($score===1)
        {
            return '<div class="small-ratings"> <i class="fa fa-star fa-2x rating-color"></i> <i class="fa fa-star fa-2x"></i> <i class="fa fa-star fa-2x"></i> </div>';
        }

        if($score<1)
        {
            return '<div class="small-ratings"> <i class="fa fa-star fa-2x"></i> <i class="fa fa-star fa-2x"></i> <i class="fa fa-star fa-2x"></i> </div>';
        }
    }
}
