<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;500;800;900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="relative">
    

    <div id="header" class="container mx-auto px-4 flex flex-row py-6 items-center justify-between backdrop-blur-sm relative" >
        <img class="flex-none mr-12" src="{{ asset('assets/system/logo.png') }}" alt="Рис ролл">
        <button class="flex flex-row items-center flex-initial w-64">
            <p class="drop-shadow-drop-text-shadow ">Город</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <div  class="flex flex-row flex-initial w-96 items-center">
            <p class="drop-shadow-drop-text-shadow mr-1">Укажи адрес</p>
            <p class="drop-shadow-drop-text-shadow text-xs pt-1">~ 50-60 мин</p>
        </div>
        <p class="flex-initial w-64 drop-shadow-drop-text-shadow">
            +7 846-225-225-9
        </p>
        <button class="mr-12 rounded-lg shadow-button-shadow px-6 py-1 bg-gradient-to-br from-gradient-pink to bg-gradient-purple text-white">
            Войти
        </button>
        <livewire:navigation-menu-button>
        
    </div>

    <livewire:navigation-menu>

    <div id="promo" class="container mx-auto px-4 h-screen">

        <div class="flex flex-row">
            <div class="basis-1/2">
                1
            </div>
            <div class="basis-1/2">
                2
            </div>
        </div>
    </div>

    <div class="sticky top-0 backdrop-blur-sm">
    <swiper-container class=" flex flex-row mb-10 space-x-3 scrollbar-hide" slides-per-view="6" spaceBetween="20" speed="200" loop="false" centeredSlides="false" allowSlideNext="true">
    <!-- <div id="categories-menu" class="flex flex-row mb-10 space-x-3 scrollbar-hide"> -->
        <swiper-slide>
            <div class="bg-white flex flex-row shadow-button-shadow rounded-3xl p-1 m-2 items-center hover:text-purple-700 cursor-pointer">
                <img class="flex-none mr-2 rounded-full" src="https://placehold.co/45x45" alt="Рис ролл">
                <p class="pr-2">Сеты</p>
            </div>
        </swiper-slide>
        <swiper-slide>
        <div class="bg-white flex flex-row shadow-button-shadow rounded-3xl p-1 m-2 items-center hover:text-purple-700 cursor-pointer">
            <img class="flex-none mr-2 rounded-full" src="https://placehold.co/45x45" alt="Рис ролл">
            <p class="pr-2 ">Запеченые роллы</p>
        </div>
        </swiper-slide>
        <swiper-slide>
        <div class="bg-white flex flex-row shadow-button-shadow rounded-3xl p-1 m-2 items-center hover:text-purple-700 cursor-pointer">
            <img class="flex-none mr-2 rounded-full" src="https://placehold.co/45x45" alt="Рис ролл">
            <p class="pr-2 ">Сеты</p>
        </div>
        </swiper-slide>
        <swiper-slide>
        <div class="bg-white flex flex-row shadow-button-shadow rounded-3xl p-1 m-2 items-center hover:text-purple-700 cursor-pointer">
            <img class="flex-none mr-2 rounded-full" src="https://placehold.co/45x45" alt="Рис ролл">
            <p class="pr-2 ">Сеты</p>
        </div>
        </swiper-slide>
        <swiper-slide>
        <div class="bg-white flex flex-row shadow-button-shadow rounded-full p-1 m-2 items-center hover:text-purple-700 cursor-pointer">
            <img class="flex-none mr-2 rounded-full" src="https://placehold.co/45x45" alt="Рис ролл">
            <p class="pr-2 ">Сеты</p>
        </div>
        </swiper-slide>
        <swiper-slide>
        <div class="bg-white flex flex-row shadow-button-shadow rounded-full p-1 m-2 items-center hover:text-purple-700 cursor-pointer">
            <img class="flex-none mr-2 rounded-full" src="https://placehold.co/45x45" alt="Рис ролл">
            <p class="pr-2 ">Сеты</p>
        </div>
        </swiper-slide>
        <swiper-slide>
        <div class="bg-white flex flex-row shadow-button-shadow rounded-full p-1 m-2 items-center hover:text-purple-700 cursor-pointer">
            <img class="flex-none mr-2 rounded-full" src="https://placehold.co/45x45" alt="Рис ролл">
            <p class="pr-2 ">Сеты</p>
        </div>
        </swiper-slide>
        <swiper-slide>
        <div class="bg-white flex flex-row shadow-button-shadow rounded-3xl p-1 m-2 items-center hover:text-purple-700 cursor-pointer">
            <img class="flex-none mr-2 rounded-full" src="https://placehold.co/45x45" alt="Рис ролл">
            <p class="pr-2">Сеты</p>
        </div>
        </swiper-slide>
        <swiper-slide>
        <div class="bg-white flex flex-row shadow-button-shadow rounded-full p-1 m-2 items-center hover:text-purple-700 cursor-pointer">
            <img class="flex-none mr-2 rounded-full" src="https://placehold.co/45x45" alt="Рис ролл">
            <p class="pr-2 ">Сеты</p>
        </div>
        </swiper-slide>
        <swiper-slide>
        <div class="bg-white flex flex-row shadow-button-shadow rounded-3xl p-1 m-2 items-center hover:text-purple-700 cursor-pointer">
            <img class="flex-none mr-2 rounded-full" src="https://placehold.co/45x45" alt="Рис ролл">
            <p class="pr-2">Сеты</p>
        </div>
        </swiper-slide>
        <swiper-slide>
        <div class="bg-white flex flex-row shadow-button-shadow rounded-3xl p-1 m-2 items-center hover:text-purple-700 cursor-pointer">
            <img class="flex-none mr-2 rounded-full" src="https://placehold.co/45x45" alt="Рис ролл">
            <p class="pr-2 ">Сеты</p>
        </div>
        </swiper-slide>
        <swiper-slide>
        <div class="bg-white flex flex-row shadow-button-shadow rounded-3xl p-1 m-2 items-center hover:text-purple-700 cursor-pointer">
            <img class="flex-none mr-2 rounded-full" src="https://placehold.co/45x45" alt="Рис ролл">
            <p class="pr-2 ">Сеты</p>
        </div>
        </swiper-slide>
        <swiper-slide>
        <div class="bg-white flex flex-row shadow-button-shadow rounded-3xl p-1 m-2 items-center hover:text-purple-700 cursor-pointer">
            <img class="flex-none mr-2 rounded-full" src="https://placehold.co/45x45" alt="Рис ролл">
            <p class="pr-2 ">Сеты</p>
        </div>
        </swiper-slide>
        <swiper-slide>
        <div class="bg-white flex flex-row shadow-button-shadow rounded-full p-1 items-center hover:text-purple-700 cursor-pointer">
            <img class="flex-none mr-2 rounded-full" src="https://placehold.co/45x45" alt="Рис ролл">
            <p class="pr-2 ">Сеты</p>
        </div>
        </swiper-slide>
        <swiper-slide>
        <div class="bg-white flex flex-row shadow-button-shadow rounded-full p-1 items-center hover:text-purple-700 cursor-pointer">
            <img class="flex-none mr-2 rounded-full" src="https://placehold.co/45x45" alt="Рис ролл">
            <p class="pr-2 ">Сеты</p>
        </div>
        </swiper-slide>
        <swiper-slide>
        <div class="bg-white flex flex-row shadow-button-shadow rounded-full p-1 items-center hover:text-purple-700 cursor-pointer">
            <img class="flex-none mr-2 rounded-full" src="https://placehold.co/45x45" alt="Рис ролл">
            <p class="pr-2 ">Сеты</p>
        </div>
        </swiper-slide>
    <!-- </div> -->
    </swiper-container>
    </div>

    <div id="catalog" class = "container mx-auto">
        <div id="category-sety">
            <h2 class="mt-10 text-start text-lg">Сеты</h2>
            <div class=" grid grid-cols-5 gap-4">
                <a class="block mt-24 cursor-pointer" onclick="Livewire.dispatch('product-selected', { id: id })">
                    <div class="bg-product-item-background rounded-3xl pt-6  flex flex-col px-6 py-4">
                        <img src="{{ asset('assets/images/placeholders/roll.png') }}" class="-mt-14" alt="">
                        <div class="flex flex-row justify-end mt-6">
                            <img src="{{ asset('assets/images/placeholders/seedling.png') }}" class="h-full" alt="">
                        </div>  
                        <p class="mt-2">Ролл Филадельфия с лососем и много сыра 11</p>
                        <div class="flex flex-row justify-between items-center mt-1">
                            <p class="text-xs text-gray-500">8 шт | 232 г</p>
                            <button class="bg-white px-6 py-1 rounded-xl shadow-button-shadow font-medium">
                                525₽
                            </button>
                        </div>
                    </div>
                </a>
                <a class="block mt-24">
                    <div class="bg-product-item-background rounded-3xl pt-6  flex flex-col px-6 py-4">
                        <img src="{{ asset('assets/images/placeholders/roll.png') }}" class="-mt-14" alt="">
                        <div class="flex flex-row justify-end mt-6">
                            <img src="{{ asset('assets/images/placeholders/seedling.png') }}" class="h-full" alt="">
                        </div>  
                        <p class="mt-2">Ролл Филадельфия с лососем и много сыра</p>
                        <div class="flex flex-row justify-between items-center mt-1">
                            <p class="text-xs text-gray-500">8 шт | 232 г</p>
                            <button class="bg-white px-6 py-1 rounded-xl shadow-button-shadow font-medium">
                                525₽
                            </button>
                        </div>
                    </div>
                </a>
                <a class="block mt-24">
                    <div class="bg-product-item-background rounded-3xl pt-6  flex flex-col px-6 py-4">
                        <img src="{{ asset('assets/images/placeholders/roll.png') }}" class="-mt-14" alt="">
                        <div class="flex flex-row justify-end mt-6">
                            <img src="{{ asset('assets/images/placeholders/seedling.png') }}" class="h-full" alt="">
                        </div>  
                        <p class="mt-2">Ролл Филадельфия с лососем и много сыра</p>
                        <div class="flex flex-row justify-between items-center mt-1">
                            <p class="text-xs text-gray-500">8 шт | 232 г</p>
                            <button class="bg-white px-6 py-1 rounded-xl shadow-button-shadow font-medium">
                                525₽
                            </button>
                        </div>
                    </div>
                </a>
                <a class="block mt-24 col-span-2">
                    <div class="bg-product-item-background rounded-3xl pt-6  flex flex-col px-6 py-4">
                        <img src="{{ asset('assets/images/placeholders/big-roll.png') }}" class="-mt-28 h-full" alt="">
                        <div class="flex flex-row justify-end -mt-7">
                            <img src="{{ asset('assets/images/placeholders/seedling.png') }}" class="h-full" alt="">
                        </div>  
                        <p class="mb-6">Ролл Филадельфия с лососем и много сыра</p>
                        <div class="flex flex-row justify-between items-center mt-1">
                            <p class="text-xs text-gray-500">8 шт | 232 г</p>
                            <button class="bg-white px-6 py-1 rounded-xl shadow-button-shadow font-medium">
                                525₽
                            </button>
                        </div>
                    </div>
                </a>
                <a class="block mt-24">
                    <div class="bg-product-item-background rounded-3xl pt-6  flex flex-col px-6 py-4">
                        <img src="{{ asset('assets/images/placeholders/roll.png') }}" class="-mt-14" alt="">
                        <div class="flex flex-row justify-end mt-6">
                            <img src="{{ asset('assets/images/placeholders/seedling.png') }}" class="h-full" alt="">
                        </div>  
                        <p class="mt-2">Ролл Филадельфия с лососем и много сыра</p>
                        <div class="flex flex-row justify-between items-center mt-1">
                            <p class="text-xs text-gray-500">8 шт | 232 г</p>
                            <button class="bg-white px-6 py-1 rounded-xl shadow-button-shadow font-medium">
                                525₽
                            </button>
                        </div>
                    </div>
                </a>
                <a class="block mt-24">
                    <div class="bg-product-item-background rounded-3xl pt-6  flex flex-col px-6 py-4">
                        <img src="{{ asset('assets/images/placeholders/roll.png') }}" class="-mt-14" alt="">
                        <div class="flex flex-row justify-end mt-6">
                            <img src="{{ asset('assets/images/placeholders/seedling.png') }}" class="h-full" alt="">
                        </div>  
                        <p class="mt-2">Ролл Филадельфия с лососем и много сыра</p>
                        <div class="flex flex-row justify-between items-center mt-1">
                            <p class="text-xs text-gray-500">8 шт | 232 г</p>
                            <button class="bg-white px-6 py-1 rounded-xl shadow-button-shadow font-medium">
                                525₽
                            </button>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div id="category-sety">
            <h2 class="mt-10 text-start text-lg">Сеты</h2>
            <div class="mt-24 grid grid-cols-5 gap-4">
                <a class="block">
                    <div class="bg-product-item-background rounded-3xl pt-6  flex flex-col px-6 py-4">
                        <img src="{{ asset('assets/images/placeholders/roll.png') }}" class="-mt-14" alt="">
                        <div class="flex flex-row justify-end mt-6">
                            <img src="{{ asset('assets/images/placeholders/seedling.png') }}" class="h-full" alt="">
                        </div>  
                        <p class="mt-2">Ролл Филадельфия с лососем и много сыра</p>
                        <div class="flex flex-row justify-between items-center mt-1">
                            <p class="text-xs text-gray-500">8 шт | 232 г</p>
                            <button class="bg-white px-6 py-1 rounded-xl shadow-button-shadow font-medium">
                                525₽
                            </button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div id="bottom" class="fixed bottom-0 z-10 bg-transparent mx-auto inset-x-0 container">       
        <div class="flex justify-between ">
            <button type="button" class="inline-flex flex-col items-center justify-center px-5 backdrop-blur-sm rounded-3xl">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.3333 18.667H50.6667V50.667C50.6667 53.6126 48.2789 56.0003 45.3333 56.0003H18.6667C15.7211 56.0003 13.3333 53.6126 13.3333 50.667V18.667Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M46.1429 18L17.8571 18H14L50 18H46.1429Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M40 18C40 18 39.7333 12 37.8667 10C36 8 34 8 32 8C30 8 28 8 26.1333 10C24.2667 12 24 18 24 18" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button type="button" class="inline-flex flex-col items-center justify-center px-6 border-2 border-gradient-purple backdrop-blur-sm rounded-3xl">
                <svg width="31" height="32" viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.6085 0C22.6635 0 29.2155 6.552 29.2155 14.607C29.2155 18.4073 27.7571 21.8734 25.3705 24.4747L30.0666 29.1611C30.5061 29.6006 30.5076 30.3116 30.0681 30.751C29.8491 30.973 29.5596 31.0826 29.2716 31.0826C28.9851 31.0826 28.6971 30.9731 28.4766 30.7541L23.7238 26.0145C21.2236 28.0168 18.0535 29.2155 14.6085 29.2155C6.5535 29.2155 0 22.662 0 14.607C0 6.552 6.5535 0 14.6085 0ZM14.6085 2.25C7.794 2.25 2.25 7.7925 2.25 14.607C2.25 21.4215 7.794 26.9655 14.6085 26.9655C21.4215 26.9655 26.9655 21.4215 26.9655 14.607C26.9655 7.7925 21.4215 2.25 14.6085 2.25Z" fill="black"/>
                </svg>
            </button>
            <button type="button" class="inline-flex flex-col items-center justify-center px-backdrop-blur-sm rounded-3xl">
            <svg width="80" height="80" xmlns="http://www.w3.org/2000/svg" fill="none">
                <g>
                <title>Слой 1</title>
                <path id="svg_1" stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="black" d="m63.51178,34.427c-4.0748,4.075 -10.1087,4.956 -15.0466,2.672c-0.7289,-0.293 -1.3265,-0.531 -1.8947,-0.531c-1.5825,0.01 -3.5523,1.544 -4.576,0.522c-1.0237,-1.024 0.5119,-2.996 0.5119,-4.588c0,-0.568 -0.2278,-1.155 -0.5213,-1.885c-2.2846,-4.937 -1.4029,-10.973 2.6719,-15.047c5.2018,-5.204 13.6531,-5.204 18.8548,-0.001c5.2112,5.211 5.2018,13.655 0,18.858z" clip-rule="evenodd" fill-rule="evenodd"/>
                <path id="svg_2" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="black" d="m59.33588,25.551l0.012,0"/>
                <path id="svg_3" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="black" d="m53.99048,25.551l0.012,0"/>
                <path id="svg_4" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="black" d="m48.64518,25.551l0.012,0"/>
                <path id="svg_5" stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="black" d="m36.83468,45.26c10.6375,10.635 13.0507,-1.668 19.8237,5.1c6.5297,6.528 10.2826,7.836 2.0096,16.106c-1.0363,0.833 -7.6203,10.852 -30.759,-12.28c-23.14158,-23.135 -13.1281,-29.726 -12.2951,-30.762c8.2931,-8.293 9.5784,-4.519 16.1081,2.009c6.773,6.771 -5.5249,9.192 5.1127,19.827z" clip-rule="evenodd" fill-rule="evenodd"/>
                </g>
            </svg>
            </button>
        </div>
    </div> 

    <div id="footer" class="mt-10 bottom-0 bg-gradient-to-br from-gradient-pink to bg-gradient-purple font-normal">
        <div class="flow-root">
            <div class="rounded-2xl container mx-auto bg-white mt-6 p-8">
                <div class="flex flex-row justify-between">
                    <div class="flex-none mr-12">
                        <img class="" src="{{ asset('assets/system/logo-footer.png') }}" alt="Рис ролл">
                    </div>
                    
                    <div class="flex flex-row  basis-1/2 justify-between">
                        <div class="flex flex-col ">
                            <h2 class="text-xl pb-16">Компания</h2>
                            <ul class="list-none space-y-1.5">
                                <li>Акции</li>
                                <li>Вакансии</li>
                                <li>Доставка и оплата</li>
                                <li>О компании</li>
                                <li>Контакты</li>
                                <li>Карта сайта</li>
                            </ul>
                        </div>
                        <div class="flex flex-col">
                            <h2 class="text-xl pb-16">Меню</h2>
                            <ul class="list-none space-y-1.5">
                                <li>Все меню</li>
                                <li>Сеты</li>
                                <li>Холодные роллы</li>
                                <li>теплые роллы</li>
                            </ul>    
                        </div>
                        <div class="flex flex-col">
                            <div class="text-xl pb-16"></div>
                            <ul class="pt-7 list-none space-y-1.5">
                                <li>Все меню</li>
                                <li>Сеты</li>
                                <li>Холодные роллы</li>
                                <li>теплые роллы</li>
                                <li>Все меню</li>
                                <li>Сеты</li>
                                <li>Холодные роллы</li>
                                <li>теплые роллы</li>
                            </ul> 
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-xl">
                            +7 846-225-225-9
                        </p>
                        <button class="mt-2 rounded-2xl shadow-button-shadow px-3 py-2 bg-gradient-to-br from-gradient-pink to bg-gradient-purple text-white">
                            Написать нам
                        </button>
                    </div>
                </div>
                <div class="flex flex-row justify-end space-x-2 mt-16">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38 20C38 29.9405 29.9405 38 20 38C10.0595 38 2 29.9405 2 20C2 10.0595 10.0595 2 20 2C29.9405 2 38 10.0595 38 20Z" fill="black"/>
                        <path d="M20.4367 25.2739C23.3719 25.2739 25.7612 22.8859 25.7612 19.9494C25.7612 17.013 23.3732 14.625 20.4367 14.625C17.5003 14.625 15.1123 17.013 15.1123 19.9494C15.1123 22.8859 17.5003 25.2739 20.4367 25.2739ZM20.4367 16.6456C22.2594 16.6456 23.7419 18.1281 23.7419 19.9507C23.7419 21.7734 22.2594 23.2559 20.4367 23.2559C18.6141 23.2559 17.1316 21.7734 17.1316 19.9507C17.1316 18.1281 18.6141 16.6456 20.4367 16.6456Z" fill="#F0F0F0"/>
                        <path d="M26.2539 15.4844C27.0443 15.4844 27.6885 14.8415 27.6885 14.0498C27.6885 13.2582 27.0456 12.6152 26.2539 12.6152C25.4622 12.6152 24.8193 13.2582 24.8193 14.0498C24.8193 14.8415 25.4622 15.4844 26.2539 15.4844Z" fill="#F0F0F0"/>
                        <path d="M26.1492 9H14.7242C11.5678 9 9 11.5678 9 14.7242V25.1764C9 28.3328 11.5678 30.9006 14.7242 30.9006H26.1492C29.3056 30.9006 31.8733 28.3328 31.8733 25.1764V14.7242C31.8733 11.5678 29.3056 9 26.1492 9ZM11.0193 14.7242C11.0193 12.6816 12.6816 11.0193 14.7242 11.0193H26.1492C28.1918 11.0193 29.854 12.6816 29.854 14.7242V25.1764C29.854 27.219 28.1918 28.8813 26.1492 28.8813H14.7242C12.6816 28.8813 11.0193 27.219 11.0193 25.1764V14.7242Z" fill="#F0F0F0"/>
                    </svg>
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38 20C38 29.9405 29.9405 38 20 38C10.0595 38 2 29.9405 2 20C2 10.0595 10.0595 2 20 2C29.9405 2 38 10.0595 38 20Z" fill="black"/>
                        <path d="M11.3476 18.878C17.5021 16.2761 25.4659 13.1039 26.5656 12.6648C29.4491 11.5157 30.334 11.7357 29.8929 14.2809C29.5759 16.1102 28.662 22.1661 27.9329 25.9356C27.5006 28.1711 26.5304 28.436 25.0054 27.4688C24.272 27.0034 20.5696 24.6503 19.7657 24.0978C19.0323 23.5944 18.0206 22.9885 19.2894 21.7955C19.7411 21.3707 22.7003 18.6546 25.0063 16.5409C25.3083 16.2634 24.9288 15.8073 24.5801 16.0299C21.4721 18.0107 17.1631 20.7598 16.6145 21.1177C15.786 21.6584 14.9901 21.9063 13.562 21.512C12.4825 21.2142 11.4286 20.8588 11.0183 20.7234C9.43787 20.2022 9.81294 19.527 11.3476 18.878Z" fill="#EBE9E9"/>
                    </svg>
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.9998 2C10.0998 2 1.99976 10.1 1.99976 20C1.99976 29.9 10.0998 38 19.9998 38C29.8998 38 37.9998 29.9 37.9998 20C37.9998 10.1 29.8998 2 19.9998 2Z" fill="black"/>
                        <path d="M20.9579 27C14.0613 27 10.1533 21.7927 10 13H13.4483C13.5249 19.4024 16.1303 22.1341 18.1226 22.6463V13H21.341V18.5488C23.3333 18.2927 25.4023 15.8171 26.092 13H29.3103C28.7739 16.4146 26.4751 18.9756 24.8659 20C26.4751 20.8537 29.0805 23.0732 30 27H26.3985C25.6322 24.3537 23.7165 22.3049 21.1877 21.9634V27H20.9579Z" fill="#EBE9E9"/>
                    </svg>
                </div>
            </div>

            <p class="uppercase container mx-auto text-xs text-center mt-4">© 2024 ИП ЧИЖОВ ИЛЬЯ АЛЕКСАНДРОВИЧ 443030, РОССИЯ, САМАРСКАЯ ОБЛ, Г САМАРА, УЛ Г.С.АКСАКОВА, Д 19А, КВ 2 ИНН 631185025066, ОГРН 321631300044700.</p>

            <div class="flex flex-row container mx-auto mt-16 justify-between mb-16">
                <p class="text-white text-4xl font-semibold text-left basis-2/5">Если у вас есть вопросы или хотите что бы вам перезвонили?</p>
                <div class="basis-2/5">
                    <p class="text-white text-xs mt-16 ">Просто отправьте нам свой номер, и мы свяжемся с вами.</p>
                    <input type="text" name="phone" id="phone" autocomplete="phone" class="mt-2 py-3 px-5 rounded-xl w-full block text-3xl flex-1 border-0 bg-transparent pl-1 text-white placeholder:text-white  bg-gradient-to-r from-gradient-light-purple from-10%  to-gradient-light-blue to-90% focus:border-none" placeholder=" +7">
                </div> 
            </div>
        
        </div>
    </div>

    <livewire:product>
       
    

    <script>
        function showProduct(id) {
            console.log(id)
            Livewire.dispatch('product-selected', { id: id });
        }
    </script>
    
</body>
</html>