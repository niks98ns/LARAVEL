<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    //
    protected $fillable = [
        'status', 'food_type', 'restaurant_id', 'user_id', 'food_id',
        
    ];


    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }

    public function food()
    {
        return $this->belongsTo('App\Food');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }

     

}
