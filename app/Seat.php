<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    public function year()
    {
        return $this->belongsTo('App\Year');
    }

    public function region()
    {
        return $this->hasOne('App\Region');
    }

    public function constituency()
    {
        return $this->hasOne('App\Constituency');
    }

    public function representative()
    {
        return $this->hasOne('App\Representative');
    }
}
