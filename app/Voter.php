<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    public function constitunecy()
    {
        return $this->belongsTo('App\Constituency');
    }

    public function region()
    {
        return $this->belongsTo('App\Region');
    }

    public function representative()
    {
        return $this->belongsTo('App\Representative');
    }
}
