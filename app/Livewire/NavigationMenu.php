<?php

namespace App\Livewire;

use Livewire\Component;

class NavigationMenu extends Component
{
    public $showMenu = true;

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
