<?php

namespace App\Http\Livewire;

use App\Models\CartProduct;
use Livewire\Component;

class AddToCart extends Component
{
    public $product;
    public function addToCart(){
        $cartProduct = new CartProduct($this->product->id,1);
        
        $this->emit('addToCart',$cartProduct);
    }
    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
