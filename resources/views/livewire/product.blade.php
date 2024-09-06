<div>
@if ($showProduct)
    <div id="product" class="fixed top-0 -right-10 bg-transparent w-full h-full duration-500 z-50">
        <!--navigation menu box-->
        <div id="sideProduct" class="fixed top-0 right-0 bg-white text-black w-2/3 h-full duration-500 z-50 rounded-3xl flex flex-row">
            <!--exit icon, it will close navbar when clicked-->
            <div class="bg-lightgray rounded-3xl h-full w-1/2 relative flex flex-col justify-center">
                <a wire:click="close" class="text-7xl absolute top-0 left-0 ml-8 mt-8 cursor-pointer">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20" cy="20" r="20" transform="matrix(-1 0 0 1 40 0)" fill="url(#paint0_linear_1818_9689)"/>
                        <path d="M14.2255 8.7377C14.838 8.1252 15.8255 8.1252 16.438 8.7377L26.8255 19.1252C27.313 19.6127 27.313 20.4002 26.8255 20.8877L16.438 31.2752C15.8255 31.8877 14.838 31.8877 14.2255 31.2752C13.613 30.6627 13.613 29.6752 14.2255 29.0627L23.2755 20.0002L14.213 10.9377C13.613 10.3377 13.613 9.3377 14.2255 8.7377Z" fill="white"/>
                        <path d="M13.4806 8.47002C14.1193 7.84333 15.149 7.84333 15.7876 8.47002L26.6188 19.0983C27.1271 19.5971 27.1271 20.4029 26.6188 20.9017L15.7876 31.53C15.149 32.1567 14.1193 32.1567 13.4806 31.53C12.842 30.9033 12.842 29.8929 13.4806 29.2662L22.9171 19.9936L13.4676 10.721C12.842 10.1071 12.842 9.08393 13.4806 8.47002Z" fill="white"/>
                        <defs>
                        <linearGradient id="paint0_linear_1818_9689" x1="-10.35" y1="4.33761e-08" x2="48.5753" y2="36.4524" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#ED4A8A"/>
                        <stop offset="1" stop-color="#9A6AFF"/>
                        </linearGradient>
                        </defs>
                    </svg>
                </a>
                <img src="{{ asset('assets/images/placeholders/product-seedling.png') }}" class="absolute top-0 right-0 mr-8 mt-8" alt="">  
                <img src="{{ asset('assets/images/placeholders/product-roll.png') }}" class="" alt="">

            </div>
            <div class="h-full w-1/2 relative pl-10 pt-10 overflow-y-scroll no-scrollbar">
                <h2 class="font-medium text-2xl">Ролл Филадельфия с клубникой и соусом манго</h2>
                <div class="flex flex-row justify-between mt-10 mr-16 items-center">
                    <p class="text-xs text-gray-500">8 шт | 232 г</p>
                    <div class="flex flex-row justify-between items-center space-x-1">
                        <p class="text-xs text-gray-500">162.3 ккал</p>
                        <a href="">
                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4554 17.708C6.20964 17.708 2.76681 14.2572 2.7668 9.99968C2.7668 5.74301 6.20964 2.29134 10.4554 2.29134C14.702 2.29134 18.144 5.74301 18.144 9.99967C18.144 14.2572 14.702 17.708 10.4554 17.708Z" stroke="#9A6AFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.4594 13.1631L10.4594 9.48059" stroke="#9A6AFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.4596 6.83626L10.4513 6.83626" stroke="#9A6AFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    <a href="">
                        <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.5544 16C31.5544 24.5616 24.6319 31.5 16.0953 31.5C7.5587 31.5 0.63623 24.5616 0.63623 16C0.63623 7.43838 7.5587 0.5 16.0953 0.5C24.6319 0.5 31.5544 7.43838 31.5544 16Z" fill="white" stroke="#E9E9F2"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.0944 9.68265C16.9691 8.79943 18.0978 8.48485 19.1803 8.50056C21.782 8.5383 24.408 10.6669 24.408 13.7505C24.408 16.7165 22.5157 19.1859 20.6441 20.8647C19.6972 21.7141 18.7259 22.3884 17.9372 22.8529C17.543 23.0849 17.1878 23.2685 16.8979 23.3964C16.7535 23.4601 16.6179 23.5132 16.4972 23.5516C16.3922 23.585 16.2442 23.6254 16.0957 23.6254C15.9472 23.6254 15.7992 23.585 15.6942 23.5516C15.5735 23.5132 15.4379 23.4601 15.2935 23.3964C15.0037 23.2685 14.6484 23.0849 14.2543 22.8529C13.4655 22.3884 12.4942 21.7141 11.5473 20.8647C9.67571 19.1859 7.78345 16.7165 7.78345 13.7505C7.78345 10.6742 10.4033 8.50049 13.0202 8.50049C14.0733 8.50049 15.2128 8.80115 16.0944 9.68265ZM19.1622 9.75043C18.1666 9.73598 17.2388 10.0748 16.6144 11.0139C16.4988 11.1877 16.3041 11.2922 16.0957 11.2922C15.8873 11.2922 15.6926 11.1877 15.577 11.0139C14.9564 10.0805 14.0117 9.75049 13.0202 9.75049C11.0237 9.75049 9.03025 11.4309 9.03025 13.7505C9.03025 16.1802 10.598 18.3359 12.3786 19.9331C13.2578 20.7217 14.1607 21.3481 14.8857 21.775C15.2484 21.9886 15.5599 22.1482 15.7956 22.2522C15.914 22.3044 16.006 22.3394 16.0711 22.3601C16.0804 22.363 16.0886 22.3655 16.0957 22.3676C16.1028 22.3655 16.111 22.363 16.1203 22.3601C16.1854 22.3394 16.2774 22.3044 16.3958 22.2522C16.6315 22.1482 16.943 21.9886 17.3058 21.775C18.0308 21.3481 18.9337 20.7217 19.8128 19.9331C21.5934 18.3359 23.1612 16.1802 23.1612 13.7505C23.1612 11.4382 21.1738 9.77961 19.1622 9.75043Z" fill="#040509"/>
                        </svg>
                    </a>
                </div>
                <p class="mt-4 ">
                    Идеальное сочетание вкусов и текстур, которое не оставит равнодушным ни одного гурмана. Мягкий и сливочный сыр, лосось, клубника и нежный соус манго создают неповторимый букет вкусов, который обязательно запомнится.
                </p>
                <h4 class="mt-8 text-2xl">Состав</h4>
                <p class="mt-6">лосось, сыр сливочный, огурец, клубника, манго, нори, рис</p>
                <div class="flex flex-row items-center mt-8">
                    <h5 class="mr-2 text-xl">Аллергены</h5>    
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99943 17.708C5.74276 17.708 2.2911 14.2572 2.2911 9.99968C2.2911 5.74301 5.74276 2.29134 9.99943 2.29134C14.2569 2.29134 17.7078 5.74301 17.7078 9.99967C17.7078 14.2572 14.2569 17.708 9.99943 17.708Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.0035 13.1631L10.0035 9.48059" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.0038 6.83626L9.99543 6.83626" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                </div>
                <p class="mt-6">рыба, молоко, соя, злаки, содержащие глютен, и продукты их переработки</p>
                <div class="flex flex-row justify-around items-center mt-10 px-12">
                    <div class="px-10 py-2 rounded-xl shadow-button-shadow text-3xl bg-gradient-to-br from-gradient-pink to bg-gradient-purple text-white flex flex-row justify-between">
                        <p>
                        +
                        </p>
                        <p>
                         1   
                        </p>
                        <p>
                         -   
                        </p>
                    </div>
                    <button class="bg-white px-10 py-2 rounded-xl shadow-button-shadow text-3xl">
                        525₽
                    </button>
                </div>
            </div>
            
            
        </div>
    </div>
@endif
</div>
