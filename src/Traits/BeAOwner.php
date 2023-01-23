<?php

namespace Harishdurga\LaravelQuiz\Traits;

use Harishdurga\LaravelQuiz\Models\Ownership;
use Harishdurga\LaravelQuiz\Models\Question;

trait BeAOwner
{
    public function ownerships(){
        return $this->morphMany(Ownership::class,'owner');
    }
    public function questions(){
        return $this->morphMany(Ownership::class,'owner','resource_type','resource_id');
    }


}