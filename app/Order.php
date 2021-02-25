<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function getDishes(){
        return $this->belongsToMany("App\Dish", `dish_order`);
    }
}
