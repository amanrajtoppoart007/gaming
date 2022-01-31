<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Solution extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */

     protected $fillable = [
        'puzzle_id',
         'option_id'
    ];

    /**
     * @return BelongsTo
     */

    public function puzzle(): BelongsTo
    {
        return $this->belongsTo(Puzzle::class);
    }
}
