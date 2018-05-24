<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paragrafo extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
