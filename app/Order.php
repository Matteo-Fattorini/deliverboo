<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function getDishes(){
        return $this->belongsToMany("App\Dish", `dish_order`,"order_id","dish_id");
    }
    public function getRestaurant(){
        return $this->belongsTo("App\Restaurant","restaurant_id");
    }


}
