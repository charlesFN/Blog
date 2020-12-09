<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    protected $table = 'blogpost';
    protected $guarded = array();
    protected $fillable = ['title', 'content'];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
