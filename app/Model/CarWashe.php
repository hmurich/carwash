<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class CarWashe extends Model{
    protected $table = 'car_washes';

    function relPrice(){
        return $this->hasOne('App\Model\Price', 'car_wash_id');
    }

    function relReserve(){
        return $this->hasMany('App\Model\Reserve', 'car_wash_id');
    }

    function relReview(){
        return $this->hasMany('App\Model\Review', 'car_wash_id');
    }
}
