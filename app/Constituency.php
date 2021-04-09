<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Constituency extends Model
{
    public function seat()
    {
        return $this->belongsTo('App\Seat');
    }

    public function region()
    {
        return $this->belongsTo('App\Region');
    }

    public function coordinates()
    {
        return $this->hasMany('App\Coordinate');
    }
}
