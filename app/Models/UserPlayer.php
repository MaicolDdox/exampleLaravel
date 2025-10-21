<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class UserPlayer extends Model
{
    
    public function user():hasOne
    {

        return $this->hasOne(User::class);

    }

    public function flight():hasOne
    {

        return $this->hasOne(Flight::class);

    }

}
