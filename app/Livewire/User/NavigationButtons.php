<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\On;

class NavigationButtons extends Component
{

    public $isAuthorized = true;

    #[On('authorization-has-passed')]
    public function showAuthorizeContend()
    {
        $this->isAuthorized = true;
    }

    public function openWishlist()
    {
        $this->dispatch('wishlist-opened'); 
    }

    public function render()
    {
        return view('livewire.user.navigation-buttons');
    }
}
