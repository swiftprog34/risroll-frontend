<div>
    @if($showProfile)
    <div class="fixed top-0 right-0 bg-transparent h-full duration-500 z-50" wire:transition.origin.right>
        <div class="fixed top-0 right-0 bg-white text-black w-[27rem] h-full duration-500 z-50 p-4 overflow-y-scroll no-scrollbar shadow-2xl py-10 ">
        <div class="flex flex-col justify-between h-full">  
            <div>
            <a class="mb-3" href="" wire:click="closeProfile">
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

            <h3 class="mt-20 text-2xl font-medium">Мои данные</h3>

            <form wire:submit="save">
            <div class="mt-8 flex items-start ">
                <div class="shrink ">
                    <input type="text" wire:model="name" class="bg-textarea rounded-2xl py-4 px-2 text-2xl mt-4 focus:border-blue-500 focus:ring-blue-500 block w-9/12" placeholder="Имя">
                    
                    <input type="text" wire:model="birthday" class="bg-textarea rounded-2xl py-4 px-2 text-2xl mt-4 w-9/12" placeholder="Дата рождения">

                    <input type="text" wire:model="email" class="bg-textarea rounded-2xl py-4 px-2 text-2xl mt-4 w-9/12" placeholder="Email">
                </div>
                    
                <div class="grow">
                    <a href="" class="flex flex-col items-center ">
                        <img src="{{ asset('assets/images/placeholders/profile_icon.png') }}" class=" mt-8" alt="">
                        <p class="mt-6 text-3xl text-center">Изменить</p>
                    </a>
                </div>

            </div>

            <p class="text-2xl mt-14">+7 (999) 170-77-01</p>

            <div class="grid grid-cols-4 gap-3 mt-12">
                <a class="bg-white cursor-pointer px-3 py-1 rounded-xl shadow-button-shadow mt-1 mb-4 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">
                    Женский
                </a>
                <a class="bg-white cursor-pointer px-3 py-1  rounded-xl shadow-button-shadow mt-1 mb-4 hover:bg-violet-600 active:bg-violet-700 focus:outline-none focus:ring focus:ring-violet-300">
                    Мужской
                </a>
            </div> 
            </div>
            <div>
                <button type="submit" class="cursor-pointer rounded-3xl mt-4 shadow-button-shadow bg-gradient-to-br from-gradient-pink to bg-gradient-purple text-white w-full py-5 px-14 text-center text-2xl">Сохранить</button>
                </form>
            </div>

            
        </div>   
        </div>
    </div>   
    @endif
</div>
