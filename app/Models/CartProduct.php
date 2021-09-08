<?php

namespace App\Models;

class CartProduct {
    public $productId ;
    public $quantity;

    public function __construct($productId,$quantity)
    {
        $this->productId = $productId;
        $this->quantity = $quantity;
    }
}