<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\On;

class Wishlist extends Component
{
    public $showWishlist = false;

    #[On('wishlist-opened')]
    public function show()
    {
        $this->showWishlist = true;
    }

    public function close() {
        $this->showWishlist = false;
    }

    public function render()
    {
        return view('livewire.user.wishlist');
    }
}
