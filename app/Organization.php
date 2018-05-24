<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public function teams(){
        return $this->hasMany(Team::class);
    }
}
