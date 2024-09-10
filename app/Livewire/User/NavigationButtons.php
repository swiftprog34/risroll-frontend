<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\On;

class NavigationButtons extends Component
{

    public $isAuthorized = false;

    #[On('authorization-has-passed')]
    public function showAuthorizeContend()
    {
        $this->isAuthorized = true;
    }

    #[On('client-logout')]
    public function clientLogout()
    {
        $this->isAuthorized = false;
        $this->reset();
    }

    public function openWishlist()
    {
        $this->dispatch('wishlist-opened'); 
    }

    public function openProfile()
    {
        $this->dispatch('main-profile-opened'); 
    }

    public function render()
    {
        return view('livewire.user.navigation-buttons');
    }
}
