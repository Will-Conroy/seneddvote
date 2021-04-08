<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    public function constituency()
    {
        return $this->belongsTo('App\Constituency');
    }

    public function constituencyRepresentative()
    {
        return $this->belongsTo('App\representative','id');
    }

    public function regionRepresentative()
    {
        return $this->belongsTo('App\representative','id');
    }
}
