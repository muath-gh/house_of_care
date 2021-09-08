<?php

namespace App\Http\Livewire;

use App\Models\CartProduct;
use Livewire\Component;

class AddToCartWithQuantity extends Component
{
    public $quantity;
    public $product;

    public function mount(){
        $this->quantity = 1;
    }

  
    public function incQuantity(){
        $this->quantity = $this->quantity+1;
    }
    public function decQuantity(){
        $this->quantity = $this->quantity < 0 ? 0 : $this->quantity-1;
    }
    public function addToCart(){
        $cartProduct = new CartProduct($this->product->id,$this->quantity);
        
        $this->emit('addToCart',$cartProduct);
    }

    public function render()
    {
        return view('livewire.add-to-cart-with-quantity');
    }
}
