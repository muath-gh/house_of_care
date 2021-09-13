<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DBCart extends Model {
    protected $table ="carts";
    protected $fillable= ['items','ip_address'];

   
}