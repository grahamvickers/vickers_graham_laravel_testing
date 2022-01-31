<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rollercoaster extends Model
{
    /**
     * fillable columns in table
     * @var array
     */
    protected $fillable = [
        'name',
        'price_per_ride',
        'description'
    ];
}
