<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinate extends Model
{
    public function constituencies()
    {
        return $this->belongsToMany('App\Constituency');
    }

    public function regions()
    {
        return $this->belongsToMany('App\region');
    }
}
