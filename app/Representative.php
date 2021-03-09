<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representative extends Model
{
    public function seat()
    {
        return $this->belongsTo('App\Seat');
    }

    public function party()
    {
        return $this->belongsTo('App\party');
    }
    public function constituencyVoters()
    {
        return $this->hasMany('App\Voter','constituency_represenatative_id');
    }

    public function regionVoters()
    {
        return $this->hasMany('App\Voter','region_represenatative_id');
    }
}
