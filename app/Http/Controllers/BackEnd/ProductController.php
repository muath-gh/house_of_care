<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Uploader;
use App\Models\Product;

class ProductController extends Controller
{


    public function index(Request $request)
    {
        $products = Product::all();

        return view('backend.products.index', ['products' => $products]);
    }
    public function create()
    {
        return view('backend.products.create');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.products.edit', ['product' => $product]);
    }


    public function store(Request $request)
    {

        try {
            $this->validate($request, [
                "product_name" => "required",
                "product_type" => "required",
                "product_price" => "required",
                "product_front_image" => "mimes:jpeg,jpg,png,gif",
                "product_back_image" => "mimes:jpeg,jpg,png,gif",

            ]);



            // store images

            $frontImage = $request->has('product_front_image') ? $request->product_front_image : null;
            $backImage = $request->has('product_back_image') ? $request->product_back_image : null;

            $uploadResult = Uploader::upload2files($frontImage, $backImage,null, "products");
            $productName = $request->product_name;
            $productType = $request->product_type;
            $productPrice = $request->product_price;
            $productDesc = $request->product_desc;
            $productType = join(",", $productType);
            $product = new Product([
                "product_name" => $productName,
                "product_type" => $productType,
                "product_front_image" => $uploadResult["full_path1"],
                "product_back_image" => $uploadResult['full_path2'],
                "product_image_dir" => $uploadResult['dir'],
                "product_desc" => $productDesc,
                "product_price" => $productPrice,
            ]);
            $product->save();

            return redirect()->back()->with('success', true);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', true);
        }
    }
    public function update(Request $request, $id)
    {
        try {
            
            $this->validate($request, [
                "product_name" => "required",
                "product_type" => "required",
                "product_price" => "required",
                "product_front_image" => "mimes:jpeg,jpg,png,gif",
                "product_back_image" => "mimes:jpeg,jpg,png,gif",

            ]);

            $product = Product::findOrFail($id);
            $frontImage = $request->has('product_front_image') ? $request->product_front_image : null;
            $backImage = $request->has('product_back_image') ? $request->product_back_image : null;

            if($frontImage){
                Uploader::remove("products","front",$product->product_image_dir);
            }

            if($backImage){
                Uploader::remove("products","back",$product->product_image_dir);
            }

            $uploadResult = Uploader::upload2files($frontImage, $backImage,$product->product_image_dir, "products");

            $productName = $request->product_name;
            $productType = $request->product_type;
            $productPrice = $request->product_price;
            $productDesc = $request->product_desc;
            $productType = join(",", $productType);
            $product->update([
                "product_name" => $productName,
                "product_type" => $productType,
                "product_front_image" => $uploadResult["full_path1"] ?  $uploadResult["full_path1"] : $product->product_front_image,
                "product_back_image" => $uploadResult['full_path2']  ?  $uploadResult["full_path2"] : $product->product_back_image,
                "product_image_dir" => $uploadResult['dir'],
                "product_desc" => $productDesc,
                "product_price" => $productPrice,
            ]);
            $product->save();
            return redirect()->back()->with('success', true);


        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', true);
        }
    }

    public function destroy($id){
        Product::findOrFail($id)->delete();
        return response()->json([
            'success'=>true
        ]);
    }
}
