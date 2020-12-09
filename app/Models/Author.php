<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function Author()
    {
        return $this->belongsTo('App\Author');
    }
}
