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
        return $this->belongsToMany('App\Coordinate');
    }

    public function representatives()
    {
        return $this->hasMany('App\Representative');
    }

    public function parties()
    {
        return $this->belongsToMany('App\party');
    }
    public function voters()
    {
        return $this->hasMany('App\voter');
    }


}
