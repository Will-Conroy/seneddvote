<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representative extends Model
{
    public function region()
    {
        return $this->belongsTo('App\Region');
    }

    public function constituency()
    {
        return $this->belongsTo('App\Constituency');
    }

    public function party()
    {
        return $this->belongsTo('App\party');
    }
    
    public function voters()
    {
        return $this->hasMany('App\Voter');
    }
}
