<div>
    @if ($showMainProfile)
    <div class="fixed top-0 -right-10 bg-transparent h-full duration-500 z-50">
        <div class="fixed top-0 right-0 bg-gradient-to-tr from-[#53ccb5] via-[#f764f6] to-[#784df8]  text-white w-[28rem] shadow-2xl h-full duration-500 z-50 px-4 py-10 overflow-y-scroll no-scrollbar">
            
            <a class="mb-3" href="" wire:click="close">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="20" cy="20" r="20" transform="matrix(-1 0 0 1 40 0)" fill="url(#paint0_linear_845_19550)"/>
                    <path d="M14.2255 8.73751C14.838 8.12501 15.8255 8.12501 16.438 8.73751L26.8255 19.125C27.313 19.6125 27.313 20.4 26.8255 20.8875L16.438 31.275C15.8255 31.8875 14.838 31.8875 14.2255 31.275C13.613 30.6625 13.613 29.675 14.2255 29.0625L23.2755 20L14.213 10.9375C13.613 10.3375 13.613 9.33751 14.2255 8.73751Z" fill="white"/>
                    <path d="M13.4806 8.47002C14.1193 7.84333 15.149 7.84333 15.7876 8.47002L26.6188 19.0983C27.1271 19.5971 27.1271 20.4029 26.6188 20.9017L15.7876 31.53C15.149 32.1567 14.1193 32.1567 13.4806 31.53C12.842 30.9033 12.842 29.8929 13.4806 29.2662L22.9171 19.9936L13.4676 10.721C12.842 10.1071 12.842 9.08393 13.4806 8.47002Z" fill="white"/>
                    <defs>
                    <linearGradient id="paint0_linear_845_19550" x1="-10.35" y1="4.33761e-08" x2="48.5753" y2="36.4524" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#ED4A8A"/>
                    <stop offset="1" stop-color="#9A6AFF"/>
                    </linearGradient>
                    </defs>
                </svg>
            </a>
            <div class="flex justify-center mt-10">
                <div class="px-24 py-10 border-white/50 border-2 rounded-2xl text-center bg-white/20">
                    <p class="font-extrabold text-5xl text-white/20 leading-[4.5rem]">Бонус<br>скоро</p>
                </div>
            </div>
            <ul class="text-2xl space-y-8  mt-20 px-10">
                <li>
                    <a class="cursor-pointer" wire:click="adresses">Адреса доставки</a>
                </li>
                <li>
                    <a class="cursor-pointer" wire:click="orders">Заказы</a>
                </li>
                <li>
                    <a class="cursor-pointer" wire:click="profile">Профиль</a>
                </li>
                <li class="text-blue-700">
                    <a class="cursor-pointer" wire:click="logout">Выйти</a>
                </li>      
            </ul>
        </div>   
    </div>
    @endif
</div>
