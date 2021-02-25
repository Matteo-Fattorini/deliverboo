<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurateur extends Model
{
    public function getRestaurant(){
        return $this->hasOne("App\Restaurant");
    }
}
