<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinate extends Model
{
    public function constituency()
    {
        return $this->belongsTo('App\Constituency');
    }

    public function region()
    {
        return $this->belongsTo('App\Region');
    }
}
