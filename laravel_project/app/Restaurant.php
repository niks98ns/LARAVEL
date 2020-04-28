<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'password', 'address', 'user_id', 'restaurant_image',
    ];



    public function food()
    {
        return $this->hasMany('App\Food');
    }

    public function userOrders()
    {
        return $this->hasMany('App\userOrder');
    }

}
