<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function year()
    {
        return $this->belongsTo('App\Year');
    }

    public function seats()
    {
        return $this->hasMany('App\Seat');
    }

    public function constituencies()
    {
        return $this->hasMany('App\constituency', 'constituency_id');
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
        return $this->hasMany('App\Voter');
    }


}
