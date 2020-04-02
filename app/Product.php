<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price'      
    ];
    public function orders(){
        return $this->hasMany('App\Order');
    }
}
