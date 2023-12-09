<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $table = 'car_models';
    protected $primaryKey = 'id';

    // A model belongs to a class
        public function Car(){
            return $this->belongsTo(Car::class);
        }

}
