<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Destiny extends Model
{
    
    public function flight():HasMany
    {

        return $this->hasMany(Flight::class);

    }

}
