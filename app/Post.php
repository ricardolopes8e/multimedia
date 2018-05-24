<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function paragrafos(){
        return $this->hasMany(Paragrafo::class);
    }
}
