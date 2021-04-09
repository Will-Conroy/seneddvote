<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Constituency extends Model
{
    public function year()
    {
        return $this->belongsTo('App\Year');
    }
    
    public function seat()
    {
        return $this->hasOne('App\Seat');
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
