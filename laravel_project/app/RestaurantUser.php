<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantUser extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'password',
        
    ];


    // public function restaurant()
    // {
    //     return $this->belongsTo('App\Restaurant');
    // }


}
