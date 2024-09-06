<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\On;

class MainProfile extends Component
{
    public $showMainProfile = true;

    #[On('main-profile-opened')]
    public function show()
    {
        $this->showMainProfile = true;
    }

    public function close() {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.user.main-profile');
    }
}
