<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use \DateTimeInterface;
class UserPuzzle extends Pivot
{

    protected $fillable = [
        "user_id",
        "puzzle_id",
        "option_id",
        "attempts",
        "started_at",
        "completed_at",
        "time_taken",
        "is_solved"
    ];

    protected $dates = [
        'started_at',
        'completed_at',
        'created_at',
        'updated_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }


}
