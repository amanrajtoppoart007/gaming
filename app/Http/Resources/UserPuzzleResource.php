<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserPuzzleResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "user_id"=>$this->user_id,
            "puzzle_id"=>$this->puzzle_id,
            "option_id"=>$this->option_id,
            "attempts"=>$this->attempts,
            "started_at"=>$this->started_at,
            "completed_at"=>$this->completed_at,
            "time_taken"=>$this->time_taken,
        ];
    }
}
