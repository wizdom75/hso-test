<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'name',
        'description'      
    ];

    public function orders(){
        return $this->hasMany('App\Order');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
