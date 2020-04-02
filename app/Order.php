<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'account_id',
        'product_id',
        'quantity',
        'cost'      
    ];
    public function account(){
        return $this->belongsTo('App\Account');
    }

    public function product(){
        return $this->belongsTo('App\Product');
    }
}
