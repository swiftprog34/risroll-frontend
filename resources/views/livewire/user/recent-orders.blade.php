<div>
    @if($showRecentOrders)
    <div class="fixed top-0 right-0 bg-transparent h-full duration-500 z-50" wire:transition.origin.right>
        <div class="fixed top-0 right-0 bg-white text-black w-[27rem] h-full duration-500 z-50 p-4 overflow-y-scroll no-scrollbar shadow-2xl py-10 ">

            
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

            <h3 class="mt-6 text-2xl font-medium">Заказы</h3>

            
            <div class="mt-10">
                <h3 class="mt-6 text-2xl font-medium">Заказ №SM6429278</h3>

                <div class="flex text-xl justify-between mt-4">
                    <div class="space-y-2">
                        <p>Сумма заказа</p>
                        <p>Статус заказа</p>
                        <p>Тип</p>
                        <p>Дата, время</p>
                    </div>
                    <div class="text-end space-y-2">
                        <p>2335₽</p>
                        <p class="text-red-700">Отменен</p>
                        <p>Доставка</p>
                        <p>28 марта в 21:20</p>
                    </div>
                </div>

                <div class="grid grid-cols-6 gap-4 mt-8">
                    <img src="{{ asset('assets/images/placeholders/recent-order-item.png') }}" class="bg-product-item-background rounded-xl" alt="">
                    <img src="{{ asset('assets/images/placeholders/recent-order-item.png') }}" class="bg-product-item-background rounded-xl" alt="">
                    <img src="{{ asset('assets/images/placeholders/recent-order-item.png') }}" class="bg-product-item-background rounded-xl" alt="">
                    <img src="{{ asset('assets/images/placeholders/recent-order-item.png') }}" class="bg-product-item-background rounded-xl" alt="">
                </div>
 

                <button class="cursor-pointer rounded-3xl mt-6 shadow-button-shadow bg-gradient-to-br from-gradient-pink to bg-gradient-purple text-white w-full py-5 px-14 text-center text-2xl">Повторить заказ</button>
            </div>

            <div class="mt-10">
                <h3 class="mt-6 text-2xl font-medium">Заказ №SM6429278</h3>

                <div class="flex text-xl justify-between mt-4">
                    <div class="space-y-2">
                        <p>Сумма заказа</p>
                        <p>Статус заказа</p>
                        <p>Тип</p>
                        <p>Дата, время</p>
                    </div>
                    <div class="text-end space-y-2">
                        <p>2335₽</p>
                        <p class="text-red-700">Отменен</p>
                        <p>Доставка</p>
                        <p>28 марта в 21:20</p>
                    </div>
                </div>

                <div class="grid grid-cols-6 gap-4 mt-8">
                    <img src="{{ asset('assets/images/placeholders/recent-order-item.png') }}" class="bg-product-item-background rounded-xl" alt="">
                    <img src="{{ asset('assets/images/placeholders/recent-order-item.png') }}" class="bg-product-item-background rounded-xl" alt="">
                    <img src="{{ asset('assets/images/placeholders/recent-order-item.png') }}" class="bg-product-item-background rounded-xl" alt="">
                    <img src="{{ asset('assets/images/placeholders/recent-order-item.png') }}" class="bg-product-item-background rounded-xl" alt="">
                </div>
 

                <button class="cursor-pointer rounded-3xl mt-6 shadow-button-shadow bg-gradient-to-br from-gradient-pink to bg-gradient-purple text-white w-full py-5 px-14 text-center text-2xl">Повторить заказ</button>
            </div>

            <div class="mt-10">
                <h3 class="mt-6 text-2xl font-medium">Заказ №SM6429278</h3>

                <div class="flex text-xl justify-between mt-4">
                    <div class="space-y-2">
                        <p>Сумма заказа</p>
                        <p>Статус заказа</p>
                        <p>Тип</p>
                        <p>Дата, время</p>
                    </div>
                    <div class="text-end space-y-2">
                        <p>2335₽</p>
                        <p class="text-green-700">Завершен</p>
                        <p>Доставка</p>
                        <p>28 марта в 21:20</p>
                    </div>
                </div>

                <div class="grid grid-cols-6 gap-4 mt-8">
                    <img src="{{ asset('assets/images/placeholders/recent-order-item.png') }}" class="bg-product-item-background rounded-xl" alt="">
                    <img src="{{ asset('assets/images/placeholders/recent-order-item.png') }}" class="bg-product-item-background rounded-xl" alt="">
                    <img src="{{ asset('assets/images/placeholders/recent-order-item.png') }}" class="bg-product-item-background rounded-xl" alt="">
                    <img src="{{ asset('assets/images/placeholders/recent-order-item.png') }}" class="bg-product-item-background rounded-xl" alt="">
                </div>
 

                <button class="cursor-pointer rounded-3xl mt-6 shadow-button-shadow bg-gradient-to-br from-gradient-pink to bg-gradient-purple text-white w-full py-5 px-14 text-center text-2xl">Повторить заказ</button>
            </div>


            
  
        </div>
    </div>   
    @endif
</div>
