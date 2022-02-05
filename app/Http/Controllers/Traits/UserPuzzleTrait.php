<?php
namespace App\Http\Controllers\Traits;

use App\Models\Puzzle;
use App\Models\Score;
use App\Models\UserPuzzle;

Trait UserPuzzleTrait {

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
         }
         else
         {
             $next_url = route('puzzle.result');
         }
         $userPuzzle = UserPuzzle::where(['user_id'=>auth()->user()->id,'puzzle_id'=>request()->input('puzzle_id')])->first();
         $score = Score::where(['user_id'=>auth()->user()->id,'puzzle_id'=>request()->input('puzzle_id')])->first();

         return [
             "puzzleId"=>$puzzle->id,
             "nextPuzzleUrl"=>$next_url,
             "score"=>$score->score,
             "image"=>$puzzle->getMedia('solutions')->last()->getUrl(),
             "timeTaken"=>$userPuzzle->time_taken,
             "overallAttempts"=>$userPuzzle->attempts,
             "startedAt"=>$userPuzzle->started_at->format("d/m/Y h:i:s A"),
             "completedAt"=>$userPuzzle->completed_at->format("d/m/Y h:i:s A"),
             "rating"=>$this->formatScore($score->score),
         ];
     }

     public function formatScore($score)
     {

         $score_one_html = $score >= 1 ? '<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="black"/>
</svg></span>' : '<span class="svg-icon"><svg>....</svg></span>';

         $score_two_html = $score >= 2 ? '<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="black"/>
</svg></span>' : '<span class="svg-icon"><svg>....</svg></span>';

         $score_three_html = $score == 3 ? '<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="black"/>
</svg></span>' : '<span class="svg-icon"><svg>....</svg></span>';


         return "<div class='rating'><div class='rating-label checked'>$score_one_html</div><div class='rating-label checked'>$score_two_html</div><div class='rating-label checked'>$score_three_html</div></div>";
     }
}