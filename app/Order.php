<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function getDishes(){
        return $this->belongsToMany("App\Dish", `dish_order`,"dish_id","order_id");
    }
    public function getRestaurant(){
        return $this->belongsTo("App\Restaurant","restaurant_id");
    }


}
