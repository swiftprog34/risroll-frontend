<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class NavigationMenu extends Component
{
    public $showMenu = false;

    #[On('main-menu-opened')]
    public function show()
    {
        $this->showMenu = true;
    }

    public function close()
    {
        $this->showMenu = false;
    }

    public function render()
    {
        return view('livewire.navigation-menu');
    }
}
