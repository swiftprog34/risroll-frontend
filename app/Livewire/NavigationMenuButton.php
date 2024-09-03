<?php

namespace App\Livewire;

use Livewire\Component;

class NavigationMenuButton extends Component
{
    public function open()
    {
        $this->dispatch('main-menu-opened'); 
    }

    public function render()
    {
        return view('livewire.navigation-menu-button');
    }
}
