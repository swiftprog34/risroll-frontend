<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Product extends Component
{
    public $showProduct = false;

    #[On('product-selected')]
    public function show($id)
    {
        $this->showProduct = true;
    }

    public function close()
    {
        $this->showProduct = false;
    }

    public function render()
    {
        return view('livewire.product');
    }
}
