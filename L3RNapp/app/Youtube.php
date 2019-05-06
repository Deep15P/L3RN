<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Youtube extends Model
{
    //Timestamps
    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User');
    }
}
