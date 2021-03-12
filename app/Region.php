<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function seat()
    {
        return $this->belongsTo('App\Seat');
    }

    public function constituencies()
    {
        return $this->hasMany('App\constituency', 'constituency_id');
    }
    
    public function coordinates()
    {
        return $this->hasMany('App\Coordinate');
    }

    
}
