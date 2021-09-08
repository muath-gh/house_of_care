<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model {

    protected $fillable = ["product_name","product_type","product_price",'product_front_image','product_back_image',
    "product_desc",'product_image_dir'];

    public function orderProducts(){
        return $this->hasMany(OrderProduct::class);
    }

  
}