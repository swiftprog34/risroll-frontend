<div @if ($showMenu) class="block" @else class="hidden" @endif >

    <div id="sideBar" class="fixed top-0 right-0 bg-transparent h-full duration-500 z-50 shadow-2xl" wire:transition.origin.right>
        <!--navigation menu box-->

        <div id="sideNav" class="fixed top-0 right-0  text-white w-[28rem] h-full duration-500 z-50 pl-20 pr-10 py-8 rounded-3xl" >
        <canvas id="menu-desktop-canvas" class="fixed top-0 right-0 bg-gradient-to-r from-pink-600 to-purple-600 text-white w-[28rem] h-full duration-500 -z-10 rounded-3xl"></canvas>
            <!--exit icon, it will close navbar when clicked-->
            <a wire:click="close" class="text-7xl fixed top-0 right-0 mr-3 mt-1 pr-10 pt-2 cursor-pointer font-light">&times;</a>
            <div class="flex flex-col justify-between h-full">
                <ul class="text-xl sm:text-xl space-y-9">
                    <li class="p-2 flex items-center">
                        <svg class="mr-4" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.15722 19.7714V16.7047C8.1572 15.9246 8.79312 15.2908 9.58101 15.2856H12.4671C13.2587 15.2856 13.9005 15.9209 13.9005 16.7047V16.7047V19.7809C13.9003 20.4432 14.4343 20.9845 15.103 21H17.0271C18.9451 21 20.5 19.4607 20.5 17.5618V17.5618V8.83784C20.4898 8.09083 20.1355 7.38935 19.538 6.93303L12.9577 1.6853C11.8049 0.771566 10.1662 0.771566 9.01342 1.6853L2.46203 6.94256C1.86226 7.39702 1.50739 8.09967 1.5 8.84736V17.5618C1.5 19.4607 3.05488 21 4.97291 21H6.89696C7.58235 21 8.13797 20.4499 8.13797 19.7714V19.7714" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <a href="#">Меню</a>
                    </li>
                    <li class="p-2 flex">
                        <svg class="mr-4" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.79489 7.05613C4.79489 5.80713 5.80689 4.79513 7.05589 4.79413H8.08489C8.68189 4.79413 9.25389 4.55713 9.67789 4.13713L10.3969 3.41713C11.2779 2.53113 12.7099 2.52713 13.5959 3.40813L13.5969 3.40913L13.6059 3.41713L14.3259 4.13713C14.7499 4.55813 15.3219 4.79413 15.9189 4.79413H16.9469C18.1959 4.79413 19.2089 5.80613 19.2089 7.05613V8.08313C19.2089 8.68013 19.4449 9.25313 19.8659 9.67713L20.5859 10.3971C21.4719 11.2781 21.4769 12.7101 20.5959 13.5961L20.5949 13.5971L20.5859 13.6061L19.8659 14.3261C19.4449 14.7491 19.2089 15.3211 19.2089 15.9181V16.9471C19.2089 18.1961 18.1969 19.2081 16.9479 19.2081H16.9469H15.9169C15.3199 19.2081 14.7469 19.4451 14.3239 19.8661L13.6039 20.5851C12.7239 21.4711 11.2929 21.4761 10.4069 20.5971C10.4059 20.5961 10.4049 20.5951 10.4039 20.5941L10.3949 20.5851L9.67589 19.8661C9.25289 19.4451 8.67989 19.2091 8.08289 19.2081H7.05589C5.80689 19.2081 4.79489 18.1961 4.79489 16.9471V15.9161C4.79489 15.3191 4.55789 14.7471 4.13689 14.3241L3.41789 13.6041C2.53189 12.7241 2.52689 11.2931 3.40689 10.4071C3.40689 10.4061 3.40789 10.4051 3.40889 10.4041L3.41789 10.3951L4.13689 9.67513C4.55789 9.25113 4.79489 8.67913 4.79489 8.08113V7.05613" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.43164 14.5716L14.5716 9.43164" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.4955 14.5H14.5045" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.4955 9.5H9.5045" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <a href="#">Акции</a>
                    </li>
                    <li class="p-2 flex">
                        <svg class="mr-4" class="mr-4" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.87187 9.59832C0.798865 6.24832 2.05287 2.41932 5.56987 1.28632C7.41987 0.689322 9.46187 1.04132 10.9999 2.19832C12.4549 1.07332 14.5719 0.693322 16.4199 1.28632C19.9369 2.41932 21.1989 6.24832 20.1269 9.59832C18.4569 14.9083 10.9999 18.9983 10.9999 18.9983C10.9999 18.9983 3.59787 14.9703 1.87187 9.59832Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15 4.7002C16.07 5.0462 16.826 6.0012 16.917 7.1222" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <a href="#">Любимое</a>
                    </li>
                    <li class="p-2 flex">
                        <svg class="mr-4" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3341 2.75H7.66512C4.64412 2.75 2.75012 4.889 2.75012 7.916V16.084C2.75012 19.111 4.63512 21.25 7.66512 21.25H16.3331C19.3641 21.25 21.2501 19.111 21.2501 16.084V7.916C21.2501 4.889 19.3641 2.75 16.3341 2.75Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.6891 12.0004C10.6891 13.0234 9.86011 13.8524 8.83711 13.8524C7.81411 13.8524 6.98511 13.0234 6.98511 12.0004C6.98511 10.9774 7.81411 10.1484 8.83711 10.1484H8.84011C9.86111 10.1494 10.6891 10.9784 10.6891 12.0004Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.692 12H17.01V13.852" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.1818 13.852V12" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <a href="#">Франчайзинг</a>
                    </li>
                    <li class="p-2 flex">
                        <svg class="mr-4" class="mr-4" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.15722 19.7714V16.7047C8.1572 15.9246 8.79312 15.2908 9.58101 15.2856H12.4671C13.2587 15.2856 13.9005 15.9209 13.9005 16.7047V16.7047V19.7809C13.9003 20.4432 14.4343 20.9845 15.103 21H17.0271C18.9451 21 20.5 19.4607 20.5 17.5618V17.5618V8.83784C20.4898 8.09083 20.1355 7.38935 19.538 6.93303L12.9577 1.6853C11.8049 0.771566 10.1662 0.771566 9.01342 1.6853L2.46203 6.94256C1.86226 7.39702 1.50739 8.09967 1.5 8.84736V17.5618C1.5 19.4607 3.05488 21 4.97291 21H6.89696C7.58235 21 8.13797 20.4499 8.13797 19.7714V19.7714" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <a href="#">Вакансии</a>
                    </li>
                    <li class="p-2 flex">
                        <svg class="mr-4" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7378 2.76175H8.0848C6.0048 2.75375 4.2998 4.41175 4.2508 6.49075V17.2037C4.2048 19.3167 5.8798 21.0677 7.9928 21.1147C8.0238 21.1147 8.0538 21.1157 8.0848 21.1147H16.0738C18.1678 21.0297 19.8178 19.2997 19.8028 17.2037V8.03775L14.7378 2.76175Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.4751 2.75V5.659C14.4751 7.079 15.6231 8.23 17.0431 8.234H19.7981" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.2881 15.3584H8.88806" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.2432 11.6064H8.88721" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <a href="#">О компании</a>
                    </li>
                    <li class="p-2 flex">
                        <svg class="mr-4" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5317 12.4724C15.5208 16.4604 16.4258 11.8467 18.9656 14.3848C21.4143 16.8328 22.8216 17.3232 19.7192 20.4247C19.3306 20.737 16.8616 24.4943 8.1846 15.8197C-0.493478 7.144 3.26158 4.67244 3.57397 4.28395C6.68387 1.17385 7.16586 2.58938 9.61449 5.03733C12.1544 7.5765 7.54266 8.48441 11.5317 12.4724Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <a href="#">Контакты</a>
                    </li>
                </ul>
                <div class="flex flex-row justify-between pl-8 pr-20">
                    <a href="#">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g style="mix-blend-mode:multiply">
                            <path d="M30.0569 5H29.9431C16.1674 5 5 16.1674 5 29.9431V30.0569C5 43.8326 16.1674 55 29.9431 55H30.0569C43.8326 55 55 43.8326 55 30.0569V29.9431C55 16.1674 43.8326 5 30.0569 5Z" fill="#F0F0F0"/>
                            </g>
                            <path d="M30.0007 37.2084C33.9754 37.2084 37.2109 33.9747 37.2109 29.9983C37.2109 26.0218 33.9772 22.7881 30.0007 22.7881C26.0243 22.7881 22.7905 26.0218 22.7905 29.9983C22.7905 33.9747 26.0243 37.2084 30.0007 37.2084ZM30.0007 25.5243C32.4689 25.5243 34.4764 27.5318 34.4764 30C34.4764 32.4682 32.4689 34.4757 30.0007 34.4757C27.5325 34.4757 25.525 32.4682 25.525 30C25.525 27.5318 27.5325 25.5243 30.0007 25.5243Z" fill="white"/>
                            <path d="M37.8781 23.9537C38.9484 23.9537 39.8208 23.0831 39.8208 22.011C39.8208 20.939 38.9502 20.0684 37.8781 20.0684C36.806 20.0684 35.9354 20.939 35.9354 22.011C35.9354 23.0831 36.806 23.9537 37.8781 23.9537Z" fill="white"/>
                            <path d="M37.7364 15.1719H22.265C17.9908 15.1719 14.5135 18.6491 14.5135 22.9233V37.0774C14.5135 41.3517 17.9908 44.8289 22.265 44.8289H37.7364C42.0107 44.8289 45.4879 41.3517 45.4879 37.0774V22.9233C45.4879 18.6491 42.0107 15.1719 37.7364 15.1719ZM17.248 22.9233C17.248 20.1573 19.499 17.9063 22.265 17.9063H37.7364C40.5024 17.9063 42.7534 20.1573 42.7534 22.9233V37.0774C42.7534 39.8434 40.5024 42.0944 37.7364 42.0944H22.265C19.499 42.0944 17.248 39.8434 17.248 37.0774V22.9233Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g style="mix-blend-mode:multiply">
                            <path d="M55 30C55 43.8063 43.8063 55 30 55C16.1938 55 5 43.8063 5 30C5 16.1938 16.1938 5 30 5C43.8063 5 55 16.1938 55 30Z" fill="#F0F0F0"/>
                            </g>
                            <path d="M14.4413 29.6462C23.1788 25.8024 34.485 21.1162 36.0463 20.4674C40.14 18.7699 41.3963 19.0949 40.77 22.8549C40.32 25.5574 39.0225 34.5037 37.9875 40.0724C37.3738 43.3749 35.9963 43.7662 33.8313 42.3374C32.79 41.6499 27.5338 38.1737 26.3925 37.3574C25.3513 36.6137 23.915 35.7187 25.7163 33.9562C26.3575 33.3287 30.5588 29.3162 33.8325 26.1937C34.2613 25.7837 33.7225 25.1099 33.2275 25.4387C28.815 28.3649 22.6975 32.4262 21.9188 32.9549C20.7425 33.7537 19.6125 34.1199 17.585 33.5374C16.0525 33.0974 14.5563 32.5724 13.9738 32.3724C11.73 31.6024 12.2625 30.6049 14.4413 29.6462Z" fill="#EBE9E9"/>
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g style="mix-blend-mode:multiply">
                            <path d="M30 5C16.25 5 5 16.25 5 30C5 43.75 16.25 55 30 55C43.75 55 55 43.75 55 30C55 16.25 43.75 5 30 5Z" fill="#F0F0F0"/>
                            </g>
                            <path d="M31.5 41.5C20.25 41.5 13.875 33.875 13.625 21H19.25C19.375 30.375 23.625 34.375 26.875 35.125V21H32.125V29.125C35.375 28.75 38.75 25.125 39.875 21H45.125C44.25 26 40.5 29.75 37.875 31.25C40.5 32.5 44.75 35.75 46.25 41.5H40.375C39.125 37.625 36 34.625 31.875 34.125V41.5H31.5Z" fill="#EBE9E9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</div>
