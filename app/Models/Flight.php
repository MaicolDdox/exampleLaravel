<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Flight extends Model
{
    
    public function origin(): HasOne
    {

        return $this->hasOne(Origin::class);

    }

    public function destiny(): HasOne
    {

        return $this->hasOne(Destiny::class);

    }

    public function modelPlane(): HasOne
    {

        return $this->hasOne(modelPlane::class);

    }

    public function airLIne(): HasOne
    {

        return $this->hasOne(AirLine::class);

    }

}
