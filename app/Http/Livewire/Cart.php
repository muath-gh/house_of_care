<?php

namespace App\Http\Livewire;

use App\Models\Cart as ModelsCart;
use App\Models\CartProduct;
use App\Models\Product;
use Livewire\Component;

class Cart extends Component
{
    public $cartCount;

    protected $listeners = ['addToCart' => 'addToCart'];

    public function mount()
    {
        $this->cartCount = app(ModelsCart::class)->getCartCount();
    }

    private function updateCartCount()
    {
        $this->cartCount = app(ModelsCart::class)->getCartCount();
    }

    public function addToCart($cartProduct)
    {
    
        
          $cart =   app(ModelsCart::class)->addProduct($cartProduct);
        
        $this->updateCartCount();

        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success',  'message' => 'تم الاضافة الى السلة']
        );
    }
    public function render()
    {
        return view('livewire.cart');
    }
}
