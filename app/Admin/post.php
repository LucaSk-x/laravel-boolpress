<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'createdBy', 'imgUrl'];

    public function tags() 
    {
        return $this->belongsToMany('App\Admin\post');
    }
}