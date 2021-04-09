<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    public function representatives()
    {
        return $this->hasMany('App\Representative');
    }

    public function constituencies()
    {
        return $this->belongsToMany('App\Constituency');
    }

    public function regions()
    {
        return $this->belongsToMany('App\Region');
    }

    public function voters()
    {
        return $this->hasMany('App\Voter');
    }
    

}
