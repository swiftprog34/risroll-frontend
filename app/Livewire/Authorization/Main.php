<?php

namespace App\Livewire\Authorization;

use Livewire\Component;
use Livewire\Attributes\On;

class Main extends Component
{
    public $authRequest = false;
    public $initial = false;

    public $phoneAuthorization = false;
    public $phoneConfirmation = false;
    public $phoneSuccess = false;

    public $emailAuthorization = false;
    public $emailConfirmation = false;
    public $emailSuccess = false;

    #[On('main-auth-screen-opened')]
    public function openAuthScreen()
    {
        $this->authRequest = true;
        $this->initial = true;
    }

    public function openPhoneAuthScreen()
    {   
        $this->initial = false;
        $this->phoneAuthorization = true;
    }

    public function openPhoneConfirmScreen()
    {
        $this->reset();
        $this->authRequest = true;
        $this->phoneConfirmation = true;
    }

    public function phoneConfirmation()
    {
        $this->dispatch('phone-confirmed')->self();
    } 

    #[On('phone-confirmed')]
    public function openPhoneSuccessScreen()
    {
        $this->phoneAuthorization = false;
        $this->phoneConfirmation = false;
        $this->phoneSuccess = true;
    }



    public function openEmailAuthScreen()
    {
        $this->initial = false;
        $this->emailAuthorization = true;
    }

    
    public function openEmailConfirmScreen()
    {
        $this->emailAuthorization = false;
        $this->emailConfirmation = true;
    }

    public function emailConfirmation()
    {
        $this->dispatch('email-confirmed')->self();
    } 

    #[On('email-confirmed')]
    public function openEmailSuccessScreen()
    {
        $this->emailAuthorization = false;
        $this->emailConfirmation = false;
        $this->emailSuccess = true;
    }

    public function close() {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.authorization.main');
    }
}
