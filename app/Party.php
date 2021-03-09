<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    public function representatives()
    {
        return $this->hasMany('App\Representative');
    }
}
