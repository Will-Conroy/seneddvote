<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
   

    public function region()
    {
        return $this->hasOne('App\Region');
    }

    public function constituency()
    {
        return $this->hasOne('App\Constituency');
    }

    public function voters()
    {
        return $this->hasMany('App\Voter');
    }
}
