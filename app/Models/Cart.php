<?php

namespace App\Models;

use App\Helper\BackEndHelper;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Cart
{


    public function getCart()
    {

        //   Session::remove('cart');
        $dbCart = DBCart::where('ip_address', BackEndHelper::getIp())->first();
        $cart = [];
        if ($dbCart) {
            $items = json_decode($dbCart->items);
            foreach($items as $item)
            {
$cart[] = (array) $item;
            }
           
        } else if (Session::get("cart")) {
            $cart = Session::get("cart");
        }
        return $cart;
    }

    public function getCartCount(): int
    {
        if ($this->getCart())
            return sizeof($this->getCart());
        return 0;
    }

    public function addProduct($cartProduct)
    {

        $cart = $this->getCart();
        $id = $this->searchForId($cartProduct["productId"], $cart);





        if ($id) {
            $cart = $this->updateQuantity($id, $cartProduct['quantity'], $cart);
        } else {
            array_push($cart, $cartProduct);
        }
        Session::put("cart", $cart);

        DBCart::updateOrCreate(["ip_address" => BackEndHelper::getIp()], [
            "items" => json_encode($cart)
        ]);

        return $cart;
    }

    public function emptyCart(): void
    {
        $cart = [];
        DBCart::where('ip_address',BackEndHelper::getIp())->delete();
        Session::put('cart', $cart);
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

    function updateQuantity($id, $quantity, &$array)
    {
        foreach ($array as  &$val) {
            if ($val['productId'] === $id) {

                $val['quantity'] = ((int)$val['quantity']) + ((int)$quantity);
            }
        }
        return $array;
    }
}
