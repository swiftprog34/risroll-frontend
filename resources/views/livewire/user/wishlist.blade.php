<div>
    @if($showWishlist)
    <div class="fixed top-0 right-0 bg-transparent h-full duration-500 z-10" wire:transition.origin.right>
        <div class="fixed top-0 right-0 bg-white text-black w-[28rem] h-full duration-500 z-50 px-3 py-3 overflow-y-scroll no-scrollbar shadow-2xl">
            
            <a class="mb-3" href="" wire:click="close">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="20" cy="20" r="20" fill="url(#paint0_linear_843_17349)"/>
                    <path d="M8.73745 14.2255C8.12495 14.838 8.12495 15.8255 8.73745 16.438L19.125 26.8255C19.6125 27.313 20.4 27.313 20.8875 26.8255L31.275 16.438C31.8875 15.8255 31.8875 14.838 31.275 14.2255C30.6625 13.613 29.675 13.613 29.0625 14.2255L20 23.2755L10.9375 14.213C10.3375 13.613 9.33745 13.613 8.73745 14.2255Z" fill="white"/>
                    <defs>
                    <linearGradient id="paint0_linear_843_17349" x1="-10.35" y1="4.33761e-08" x2="48.5753" y2="36.4524" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#ED4A8A"/>
                    <stop offset="1" stop-color="#9A6AFF"/>
                    </linearGradient>
                    </defs>
                </svg>
            </a>

            <h3 class="text-2xl mt-6">Любимое</h3>
           

            <div class=" grid grid-cols-2 gap-4">
                <a class="block mt-24 cursor-pointer" onclick="Livewire.dispatch('product-selected', { id: id })">
                    <div class="bg-product-item-background rounded-3xl pt-6  flex flex-col px-6 py-4">
                        <img src="{{ asset('assets/images/placeholders/roll.png') }}" class="-mt-14" alt="">
                        <p class="mt-2">Ролл Филадельфия с лососем и много сыра 11</p>
                        <p class="text-xs text-gray-500">8 шт | 232 г</p>
                        <div class="flex flex-row justify-between items-center mt-4"> 
                            <button class="bg-white px-6 py-1 rounded-xl shadow-button-shadow font-medium">
                                525₽
                            </button>
                            <img src="{{ asset('assets/images/placeholders/seedling.png') }}" class="h-full" alt="">
                        </div>
                    </div>
                </a>
                <a class="block mt-24 cursor-pointer" onclick="Livewire.dispatch('product-selected', { id: id })">
                    <div class="bg-product-item-background rounded-3xl pt-6  flex flex-col px-6 py-4">
                        <img src="{{ asset('assets/images/placeholders/roll.png') }}" class="-mt-14" alt="">
                        <p class="mt-2">Ролл Филадельфия с лососем и много сыра 11</p>
                        <p class="text-xs text-gray-500">8 шт | 232 г</p>
                        <div class="flex flex-row justify-between items-center mt-4"> 
                            <button class="bg-white px-6 py-1 rounded-xl shadow-button-shadow font-medium">
                                525₽
                            </button>
                            <img src="{{ asset('assets/images/placeholders/seedling.png') }}" class="h-full" alt="">
                        </div>
                    </div>
                </a>
                <a class="block mt-24 cursor-pointer" onclick="Livewire.dispatch('product-selected', { id: id })">
                    <div class="bg-product-item-background rounded-3xl pt-6  flex flex-col px-6 py-4">
                        <img src="{{ asset('assets/images/placeholders/roll.png') }}" class="-mt-14" alt="">
                        <p class="mt-2">Ролл Филадельфия с лососем и много сыра 11</p>
                        <p class="text-xs text-gray-500">8 шт | 232 г</p>
                        <div class="flex flex-row justify-between items-center mt-4"> 
                            <button class="bg-white px-6 py-1 rounded-xl shadow-button-shadow font-medium">
                                525₽
                            </button>
                            <img src="{{ asset('assets/images/placeholders/seedling.png') }}" class="h-full" alt="">
                        </div>
                    </div>
                </a>
                <a class="block mt-24 cursor-pointer" onclick="Livewire.dispatch('product-selected', { id: id })">
                    <div class="bg-product-item-background rounded-3xl pt-6  flex flex-col px-6 py-4">
                        <img src="{{ asset('assets/images/placeholders/roll.png') }}" class="-mt-14" alt="">
                        <p class="mt-2">Ролл Филадельфия с лососем и много сыра 11</p>
                        <p class="text-xs text-gray-500">8 шт | 232 г</p>
                        <div class="flex flex-row justify-between items-center mt-4"> 
                            <button class="bg-white px-6 py-1 rounded-xl shadow-button-shadow font-medium">
                                525₽
                            </button>
                            <img src="{{ asset('assets/images/placeholders/seedling.png') }}" class="h-full" alt="">
                        </div>
                    </div>
                </a>
                <a class="block mt-24 cursor-pointer" onclick="Livewire.dispatch('product-selected', { id: id })">
                    <div class="bg-product-item-background rounded-3xl pt-6  flex flex-col px-6 py-4">
                        <img src="{{ asset('assets/images/placeholders/roll.png') }}" class="-mt-14" alt="">
                        <p class="mt-2">Ролл Филадельфия с лососем и много сыра 11</p>
                        <p class="text-xs text-gray-500">8 шт | 232 г</p>
                        <div class="flex flex-row justify-between items-center mt-4"> 
                            <button class="bg-white px-6 py-1 rounded-xl shadow-button-shadow font-medium">
                                525₽
                            </button>
                            <img src="{{ asset('assets/images/placeholders/seedling.png') }}" class="h-full" alt="">
                        </div>
                    </div>
                </a>
                <a class="block mt-24 cursor-pointer" onclick="Livewire.dispatch('product-selected', { id: id })">
                    <div class="bg-product-item-background rounded-3xl pt-6  flex flex-col px-6 py-4">
                        <img src="{{ asset('assets/images/placeholders/roll.png') }}" class="-mt-14" alt="">
                        <p class="mt-2">Ролл Филадельфия с лососем и много сыра 11</p>
                        <p class="text-xs text-gray-500">8 шт | 232 г</p>
                        <div class="flex flex-row justify-between items-center mt-4"> 
                            <button class="bg-white px-6 py-1 rounded-xl shadow-button-shadow font-medium">
                                525₽
                            </button>
                            <img src="{{ asset('assets/images/placeholders/seedling.png') }}" class="h-full" alt="">
                        </div>
                    </div>
                </a>
                <a class="block mt-24 cursor-pointer" onclick="Livewire.dispatch('product-selected', { id: id })">
                    <div class="bg-product-item-background rounded-3xl pt-6  flex flex-col px-6 py-4">
                        <img src="{{ asset('assets/images/placeholders/roll.png') }}" class="-mt-14" alt="">
                        <p class="mt-2">Ролл Филадельфия с лососем и много сыра 11</p>
                        <p class="text-xs text-gray-500">8 шт | 232 г</p>
                        <div class="flex flex-row justify-between items-center mt-4"> 
                            <button class="bg-white px-6 py-1 rounded-xl shadow-button-shadow font-medium">
                                525₽
                            </button>
                            <img src="{{ asset('assets/images/placeholders/seedling.png') }}" class="h-full" alt="">
                        </div>
                    </div>
                </a>
                <a class="block mt-24 cursor-pointer" onclick="Livewire.dispatch('product-selected', { id: id })">
                    <div class="bg-product-item-background rounded-3xl pt-6  flex flex-col px-6 py-4">
                        <img src="{{ asset('assets/images/placeholders/roll.png') }}" class="-mt-14" alt="">
                        <p class="mt-2">Ролл Филадельфия с лососем и много сыра 11</p>
                        <p class="text-xs text-gray-500">8 шт | 232 г</p>
                        <div class="flex flex-row justify-between items-center mt-4"> 
                            <button class="bg-white px-6 py-1 rounded-xl shadow-button-shadow font-medium">
                                525₽
                            </button>
                            <img src="{{ asset('assets/images/placeholders/seedling.png') }}" class="h-full" alt="">
                        </div>
                    </div>
                </a>
            </div>

        </div>   
    </div>
    @endif
</div>
