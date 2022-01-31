<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    /**
     * fillable columns in table
     * @var array
     */
    protected $fillable = [
        'seat_type',
        'price_per_ride',
        'description'
    ];
}
