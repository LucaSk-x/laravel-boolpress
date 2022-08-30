<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class details extends Model
{
    public function user() 
    {
        return $this->belongsTo('App\User');
    }

    protected $fillable = ['address', 'city', 'phone', 'role'];
}
