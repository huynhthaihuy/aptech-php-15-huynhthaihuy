<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    //
    public function user()
    {
        return $this->hasOne('App\User', 'passport_id');
    }
}
