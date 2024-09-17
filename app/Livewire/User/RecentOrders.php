<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\On;

class RecentOrders extends Component
{

    public $showRecentOrders = false;

    #[On('client-orders-opened')]
    public function show()
    {
        $this->showRecentOrders = true;
    }

    public function close()
    {
        $this->showRecentOrders = false;
    }

    public function render()
    {
        return view('livewire.user.recent-orders');
    }
}
