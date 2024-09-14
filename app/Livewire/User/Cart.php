<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\On;

class Cart extends Component
{
    public $showCart = false;
    public $cashPayment = true;
    public $isAuthorized = false;

    #[On('cart-opened')]
    public function show()
    {
        $this->showCart = true;
    }

    public function render()
    {
        return view('livewire.user.cart');
    }
}
