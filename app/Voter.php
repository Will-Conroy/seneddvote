<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    public function constituency()
    {
        return $this->belongsTo('App\Constituency');
    }

    public function region()
    {
        return $this->belongsTo('App\Region');
    }

    public function party()
    {
        return $this->belongsTo('App\Party');
    }
}
