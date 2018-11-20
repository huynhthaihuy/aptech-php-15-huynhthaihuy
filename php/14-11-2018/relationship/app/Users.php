<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    public function passport()
    {
        return $this->belongsTo('App\Passport', 'passport_id');
    }
    public function phone()
    {
        return $this->hasOne('App\Phone','user_id');
    }
}
