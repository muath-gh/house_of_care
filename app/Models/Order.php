<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    protected $table="orders";
    protected $fillable =["customer_name","customer_phone","customer_address"];

    public function orderProducts(){
        return $this->hasMany(OrderProduct::class);
    }
}
