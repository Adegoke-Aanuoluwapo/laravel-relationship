<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $primaryKey = 'id';

    protected $hidden =['updated_at'];
    protected $visible=['name','founded', 'description'];

    public function carmodels(){
        return $this->hasMany(CarModel::class);
    }

    public function headquarter(){
        return $this->hasOne(Headquarter::class);
    }

    //Define a has many through relationship
    public function engines(){
        return $this->hasManyThrough(
            Engine::class,
            CarModel::class,
            'car_id', //Foreign Key on Car Model
            'model_id' //Foreign key on Engine Model
        );
    }
    
    //Define a has one through relationship
    public function productionDate(){
        return $this->hasOneThrough(CarProductionDate::class,
                            CarModel::class,
                        'car_id',
                        'model_id'
                    );
    }
    public function products(){
            return $this->belongsToMany(Product::class);
    }
 
    
}
