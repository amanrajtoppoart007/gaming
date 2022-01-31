<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $table = 'options';

    protected $fillable = [
        'puzzle_id',
        'option',
        'key',
    ];

    public function puzzle()
    {
        return $this->belongsTo(Puzzle::class);
    }

    CONST OPTIONS = [
        0=>'ANSWER 1',
        1=>'ANSWER 2',
        2=>'ANSWER 3',
        3=>'ANSWER 4'
    ];
}
