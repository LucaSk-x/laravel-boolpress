<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    public function post()
    {
        return $this->belongsToMany('App\post');
    }
}
