<?php

namespace App\Models;

use Illuminate\Support\Facades\Session;

class Cart
{


    public function getCart()
    {
        // Session::remove('cart');
        return  Session::get('cart') ? Session::get('cart') : [];
    }

    public function getCartCount(): int
    {
        if ($this->getCart())
            return sizeof($this->getCart());
        return 0;
    }

    public function addProduct($cartProduct)
    {

        
        $cart = Session::get("cart") ?  Session::get("cart") : [];
        $id = $this->searchForId($cartProduct["productId"], $cart);
       




        if ($id) {
            $cart = $this->updateQuantity($id,$cartProduct['quantity'], $cart);
        } else {
            array_push($cart, $cartProduct);
        }
        Session::put("cart", $cart);
        
        
    }

    public function emptyCart(): void
    {
        $cart = [];
        session('card')->put($cart);
    }

    function searchForId($id, $array)
    {
        foreach ($array as $key => $val) {
            if ($val['productId'] === $id) {
                return $val['productId'];
            }
        }
        return null;
    }

    function updateQuantity($id,$quantity, &$array)
    {
        foreach ($array as  &$val) {
            if ($val['productId'] === $id) {
                
                $val['quantity'] = ((int)$val['quantity']) + ((int)$quantity);
            }
        }
        return $array;
    }
}
