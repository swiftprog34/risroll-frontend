<div>
    @if($isAuthorized)
    <div class="flex flex-row justify-beetween items-center">
        <div class="cursor-pointer" wire:click="openWishlist">
            <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.28645 19.8305C3.49811 14.2472 5.58811 7.86554 11.4498 5.9772C14.5331 4.9822 17.9364 5.56887 20.4998 7.4972C22.9248 5.6222 26.4531 4.98887 29.5331 5.9772C35.3948 7.86554 37.4981 14.2472 35.7114 19.8305C32.9281 28.6805 20.4998 35.4972 20.4998 35.4972C20.4998 35.4972 8.16311 28.7839 5.28645 19.8305Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M27.1667 11.6665C28.95 12.2432 30.21 13.8348 30.3617 15.7032" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>   
        <div class="block" href="">
            <img src="{{ asset('assets/images/placeholders/user-icon.png') }}" alt="">
        </div> 
    </div>    
    @else
    <div class="cursor-pointer mr-12 rounded-lg shadow-button-shadow px-6 py-1 bg-gradient-to-br from-gradient-pink to bg-gradient-purple text-white" onclick="Livewire.dispatch('main-auth-screen-opened')">
        Войти
    </div>
    @endif
</div>
