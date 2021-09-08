<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function shop($type){
   
        $total = Product::where('product_type', 'like', '%' . $type. '%')->count();
        $products = Product::where('product_type', 'like', '%' . $type. '%')->paginate(6);
        return view('frontend.shop',['products'=>$products,"type"=>$type,'total'=>$total]);
    }


    public function productDetail($id){
        $product = Product::findOrFail($id);

        return view('frontend.product-detail',['product'=>$product]);

    }

    public function storeOrder(Request $request){
        $request->validate([
            "first_name"=>"required",
            "last_name"=>"required",
            "phone"=>"required",
            "address"=>"required"
        ],[
            "first_name.required"=>"هذا الحقل مطلوب",
            "last_name.required"=>"هذا الحقل مطلوب",
            "phone.required"=>"هذا الحقل مطلوب",
            "address.required"=>"هذا الحقل مطلوب"
        ]);

    }

    public function checkOut(){
        $products= [];
        $cart = app(Cart::class)->getCart();
        foreach($cart as $c){
            $product = Product::findOrFail($c['productId']);
            $products[]=[
                "name"=>$product->product_name,
                "price"=>$product->product_price,
                "image"=>$product->product_front_image,
                "quantity"=>$c['quantity']
            ];
        }
        return view('frontend.checkout',['products'=>$products]);
    }
}
