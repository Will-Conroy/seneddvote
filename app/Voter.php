<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    public function seat()
    {
        return $this->belongsTo('App\seat');
    }

    public function representative()
    {
        return $this->belongsTo('App\representative');
    }
}
