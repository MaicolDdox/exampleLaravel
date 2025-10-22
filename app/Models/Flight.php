<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Flight extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'origin_id',
        'destinie_id',
        'model_plane_id',
        'airline_id',
        'positionValue',
        'dateHour',
        'userPassenger',
        'cantCupos',
        'estado',
    ]

    //Relacion para la tabla origin
    public function origin(): BelongsTo
    {
        return $this->belongsTo(Origin::class);
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
