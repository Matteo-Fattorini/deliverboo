<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function getRestaurateur(){
        return $this->belongsTo("App\Restaurateur");
    }

    public function getTypes(){
        return $this->belongsToMany("App\Types", "restaurant_type");
    }
}

