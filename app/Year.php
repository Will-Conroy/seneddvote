<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    public function constituencies()
    {
        return $this->hasMany('App\Constituency');
    }

    public function regions()
    {
        return $this->hasMany('App\Region');
    }

    
}
