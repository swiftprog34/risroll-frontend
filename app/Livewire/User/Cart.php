<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\On;

class Cart extends Component
{
    public $showCart = false;
    public $cashPayment = true;
    public $isAuthorized = false;
    public $paymentTypeOpenedCash = false;

    #[On('cart-opened')]
    public function show()
    {
        $this->showCart = true;
    }

    public function showPaymentTypeCash() 
    {
        $this->paymentTypeOpenedCash = true;     
    }

    public function hidePaymentTypeCash() 
    {
        $this->paymentTypeOpenedCash = false;    
    }

    public function render()
    {
        return view('livewire.user.cart');
    }
}
