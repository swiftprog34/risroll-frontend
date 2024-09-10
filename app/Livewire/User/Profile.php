<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\On;

class Profile extends Component
{
    public $showProfile = false;

    #[On('client-profile-opened')]
    public function show()
    {
        $this->showProfile = true;
    }

    public function render()
    {
        return view('livewire.user.profile');
    }
}
