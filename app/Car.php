<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['car_maker', 'model', 'year', 'price', 'description'];
}
