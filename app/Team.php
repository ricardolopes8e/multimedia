<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $organization
 */
class Team extends Model
{
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function players(){
        return $this->hasMany(Player::class);
    }

    public function modalidade(){
        return $this->belongsTo(Modalidade::class);
    }
}
