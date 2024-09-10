<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\On;

class MainProfile extends Component
{
    public $showMainProfile = false;

    #[On('main-profile-opened')]
    public function show()
    {
        $this->showMainProfile = true;
    }

    public function orders()
    {
        $this->dispatch('client-orders-opened'); 
    }

    public function adresses()
    {
        $this->dispatch('client-adresses-opened'); 
    }

    public function profile() 
    {
        $this->dispatch('client-profile-opened');
    }

    public function logout() 
    {
        $this->dispatch('client-logout');
        $this->reset();
    }

    public function close() {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.user.main-profile');
    }
}
