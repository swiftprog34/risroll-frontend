<div>
    @if($showProfile)
    <div class="fixed top-0 right-0 bg-transparent h-full duration-500 z-50" wire:transition.origin.right>
        <div class="fixed top-0 right-0 bg-white text-black w-[28rem] h-full duration-500 z-50 p-4 overflow-y-scroll no-scrollbar shadow-2xl">
          
            <a class="mb-3" href="" wire:click="close">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="20" cy="20" r="20" transform="rotate(-90 20 20)" fill="url(#paint0_linear_845_17619)"/>
                    <path d="M14.2253 31.2625C14.8378 31.875 15.8253 31.875 16.4378 31.2625L26.8253 20.875C27.3128 20.3875 27.3128 19.6 26.8253 19.1125L16.4378 8.72502C15.8253 8.11252 14.8378 8.11252 14.2253 8.72502C13.6128 9.33752 13.6128 10.325 14.2253 10.9375L23.2753 20L14.2128 29.0625C13.6128 29.6625 13.6128 30.6625 14.2253 31.2625Z" fill="white"/>
                    <defs>
                    <linearGradient id="paint0_linear_845_17619" x1="-10.35" y1="4.33761e-08" x2="48.5753" y2="36.4524" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#ED4A8A"/>
                    <stop offset="1" stop-color="#9A6AFF"/>
                    </linearGradient>
                    </defs>
                </svg>
            </a>



                <div class="flex place-content-center">
                    <img src="{{ asset('assets/images/placeholders/auth.png') }}" class="" alt="">
                </div>
                <p class="text-2xl mt-1 font-medium">Авторизуйся</p>
                <p class="mt-6 text-xl">По номеру телефона</p>
                <div class="flex flex-row mt-6 w-full">
                    <p class="mt-6 py-2 px-2 text-lg rounded-lg border-darkgray border-2 mr-2">+7</p>
                    <p wire:click="openPhoneAuthScreen" class="text-lg mt-6 py-2 px-2 rounded-lg border-darkgray border-2 text-darkgray cursor-pointer grow"><span class="text-black">|</span>(999)-999-99-99</p>
                </div>
                <p class="mt-6 text-xl">По электронной почте</p>
                <p wire:click="openEmailAuthScreen" class="text-lg mt-6 py-2 px-1 rounded-lg border-darkgray border-2 text-darkgray cursor-pointer"><span class="text-black">|</span>RisRoll@mail.ru</p>

                <p class="mt-4 center text-xs">Авторизовываясь на сайте</p>
                <p class="mt-1 center text-xs">я соглашаюсь с <span class="underline">условиями использования</span></p>

                <div class="shadow-button-shadow bg-darkgray w-full px-5 text-white text-2xl place-content-center py-3 mt-4 rounded-2xl flex">Войти</div>


        </div>   
    </div>   
    @endif
</div>
