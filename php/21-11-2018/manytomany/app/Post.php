<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public $timestamps = false;
    public function categories()
    {
        return $this->belongsToMany('App\Category')->withPivot('post_id', 'category_id');
    }
}
