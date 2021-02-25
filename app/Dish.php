<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    public function getRestaurant(){
        return $this->belongsTo("App\Restaurant");
    }
    public function getGenre(){
        return $this->belongsTo("App\Genre");
    }
}
