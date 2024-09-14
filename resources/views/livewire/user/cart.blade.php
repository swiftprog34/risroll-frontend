<div>
    @if($showCart)
    <div class="fixed top-0 right-0 bg-transparent h-full duration-500 z-10" wire:transition.origin.right>
        <div class="fixed top-0 right-0 bg-white text-black w-[27rem] h-full duration-500 z-50 px-5 py-3 overflow-y-scroll no-scrollbar shadow-2xl">
            
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

            @if(!$isAuthorized)
            <div class="cursor-pointer rounded-3xl shadow-button-shadow bg-gradient-to-br from-gradient-pink to bg-gradient-purple text-white w-full py-5 px-14 mt-10 text-center text-2xl" onclick="Livewire.dispatch('main-auth-screen-opened')">
                Авторизуйся, чтобы сделать заказ
            </div>
            @endif

            <div class="flex mt-10 justify-between items-start">
                <div>
                    <p class="text-xl font-medium">Доставка по адресу</p>
                    <p class="text-xl mt-3">улица Стара-Загора, 161</p>   
                </div>
                <a href="">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.7476 20.4428H21.0002" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.021 6.00098L16.4732 10.1881" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

            <p class="mt-10">Доставка сегодня к 11:00</p>

            <img src="{{ asset('assets/images/placeholders/delivery-cart.png') }}" class="w-full mt-8" alt="">

            <div class="flex mt-8 justify-between">
                <p class="text-xl font-medium">Заказ</p>
                <a href="">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20.708 6.23975H3.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

            <div class="mt-2">
                <div class="flex mt-6">
                    <a href="" class="block">
                        <div class="flex justify-between align-top">
                            <img src="{{ asset('assets/images/placeholders/cart_product.png') }}" alt=""> 
                            <div class="mr-3">
                                <p class="text-sm">Ролл Филадельфия с клубникой и соусом манго</p>
                                <p class="text-darkgray text-xs">8 шт / 232 г</p>
                            </div>
                            <button class="bg-white px-4 rounded-3xl shadow-button-shadow mt-1 mb-5">
                                1x525₽
                            </button>
                        </div>
                    </a>
                </div>
                <div class="flex mt-6">
                    <a href="" class="block">
                        <div class="flex justify-between">
                            <img src="{{ asset('assets/images/placeholders/cart_product.png') }}" alt=""> 
                            <div class="mr-1">
                                <p class="text-sm">Ролл Филадельфия с клубникой и соусом манго</p>
                                <p class="text-darkgray text-xs">8 шт / 232 г</p>
                            </div>
                            <button class="bg-white px-4 rounded-3xl shadow-button-shadow mt-1 mb-5">
                                1x525₽
                            </button>
                        </div>
                    </a>
                </div>
                <div class="flex mt-6">
                    <a href="" class="block">
                        <div class="flex justify-between">
                            <img src="{{ asset('assets/images/placeholders/cart_product.png') }}" alt=""> 
                            <div class="mr-1">
                                <p class="text-sm">Ролл Филадельфия с клубникой и соусом манго</p>
                                <p class="text-darkgray text-xs">8 шт / 232 г</p>
                            </div>
                            <button class="bg-white px-4 rounded-3xl shadow-button-shadow mt-1 mb-5">
                                1x525₽
                            </button>
                        </div>
                    </a>
                </div>
                <div class="flex mt-6">
                    <a href="" class="block">
                        <div class="flex justify-between align-top">
                            <img src="{{ asset('assets/images/placeholders/cart_product.png') }}" alt=""> 
                            <div class="mr-1">
                                <p class="text-sm">Ролл Филадельфия с клубникой и соусом манго</p>
                                <p class="text-darkgray text-xs">8 шт / 232 г</p>
                            </div>
                            <button class="bg-white px-4 rounded-3xl shadow-button-shadow mt-1 mb-5">
                                1x525₽
                            </button>
                        </div>
                    </a>
                </div>
            </div>

            <div class="mt-14">
                <p class="text-xl font-medium">Время доставки</p>

                <div class="mt-6">
                    <div class="flex items-center mb-4">
                        <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-gradient-purple bg-gray-100 border-gray-300 focus:ring-gradient-purple dark:focus:ring-gradient-purple dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-radio-1" class="ms-2 text-sm ">Ближайшее</label>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-gradient-purple bg-gray-100 border-gray-300 focus:ring-gradient-purple dark:focus:ring-gradient-purple dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2" class="ms-2 text-sm ">Ко времени сегодня</label>
                        </div>

                        <a href="">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7476 20.4428H21.0002" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.78 3.79479C13.5557 2.86779 14.95 2.73186 15.8962 3.49173C15.9485 3.53296 17.6295 4.83879 17.6295 4.83879C18.669 5.46719 18.992 6.80311 18.3494 7.82259C18.3153 7.87718 8.81195 19.7645 8.81195 19.7645C8.49578 20.1589 8.01583 20.3918 7.50291 20.3973L3.86353 20.443L3.04353 16.9723C2.92866 16.4843 3.04353 15.9718 3.3597 15.5773L12.78 3.79479Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.021 6.00098L16.4732 10.1881" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    
                </div>
            </div>

            <div class="mt-12">
                <p class="text-2xl font-medium">Способ оплаты</p>

                <div class="mt-6">
                    <div class="flex items-center mb-4">
                        <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-gradient-purple bg-gray-100 border-gray-300 focus:ring-gradient-purple dark:focus:ring-gradient-purple dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-radio-1" class="ms-2 text-xl ">Картой при получении</label>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-gradient-purple bg-gray-100 border-gray-300 focus:ring-gradient-purple dark:focus:ring-gradient-purple dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-radio-2" class="ms-2 text-xl ">Наличными</label>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="mt-12">
                <p class="text-xl font-medium">Комментарий к заказу</p>

                <div class="mt-6">
                <textarea id="message" rows="3" class="block p-2.5 w-4/6 bg-textarea rounded-2xl" placeholder="Добавь комментарий к заказу, если нужно"></textarea>
                    
                </div>
            </div>

            <div class="mt-10">
                <p class="text-xl font-medium">Стоимость заказа</p>
                <div class="flex justify-between mt-2">
                    <p>Еда</p>
                    <p>525₽</p>
                </div>
                <div class="flex justify-between mt-2">
                    <p>Доставка (Бесплатно от 999 ₽)</p>
                    <p>99₽</p>
                </div>
                <div class="flex justify-between mt-2">
                    <p>Промокод</p>
                    <div class="cursor-pointer rounded-lg shadow-button-shadow px-1.5 bg-gradient-to-br from-gradient-pink to bg-gradient-purple text-white" onclick="Livewire.dispatch('main-auth-screen-opened')">
                        Ввести
                    </div>
                </div>
                <div class="flex justify-between mt-8">
                    <p class="text-xl font-medium">Итого</p>
                    <p class="text-lg">624₽</p>
                </div>
            </div>

            <p class="mt-14 text-center text-sm">Закажи еще на 999 р для бесплатной доставки</p>

            @if(!$isAuthorized)
            <div class="cursor-pointer rounded-3xl mt-4 shadow-button-shadow bg-gradient-to-br from-gradient-pink to bg-gradient-purple text-white w-full py-5 px-14 text-center text-2xl" onclick="Livewire.dispatch('main-auth-screen-opened')">
                Авторизоваться
            </div>
            @endif
        </div>   
    </div>
    @endif
</div>

