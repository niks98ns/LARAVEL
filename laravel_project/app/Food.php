<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //
    protected $fillable = [
        'food_name', 'price', 'status', 'food_type', 'restaurant_id',
        
    ];


    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }

    public function UserOrder()
    {
        return $this->hasMany('App\UserOrder');
    }

}
