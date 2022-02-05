<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

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
}
