<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class UserPayer extends Model
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
