<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foto extends Model
{
    //
    protected $guarded = [];

    public function shpalljet(){

        return $this->belongsTo(Shpalljet::class);
    }
}
