<?php
namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;
trait ScoreCalculationTrait
{

    public function getTimeDifference($start_time,$end_time)
    {
        try {
            $from = date_create($start_time);
            $to = date_create($end_time);
            $difference = date_diff($from, $to);
            $minutes = $difference->days * 24 * 60;
            $minutes += $difference->h * 60;
            $minutes += $difference->i;
            return $minutes;
        }
        catch (\Exception $exception)
        {
            $minutes = 0;
        }
        return $minutes;

    }

    public function calculateScore($to,$from)
    {
         $score =0;
         $minutes = $this->getTimeDifference($to,$from);
        if($minutes>0 && $minutes<=2)
        {
            $score = 3;
        }
        if($minutes>2 && $minutes<=4)
        {
            $score = 2;
        }
        if($minutes>4)
        {
            $score = 1;
        }
        return $score;
    }

}
