<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'description','content'];
    public $timestamps = false;
    public function categories()
    {
        return $this->belongsToMany('App\Category')->withPivot('post_id', 'category_id');
    }
}