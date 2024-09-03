<div>
    @if($authRequest)
    <div class="fixed top-0 -right-10 bg-transparent h-full duration-500 z-50">
        <div class="fixed top-0 right-0 bg-white text-black w-1/4 h-full duration-500 z-50 px-3 py-3 ">
            @if(!$emailSuccess || !$phoneSuccess)
            <a class="mb-3" href="" wire:click="close">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="20" cy="20" r="20" fill="url(#paint0_linear_1783_6568)"/>
                    <path d="M25.7745 8.73745C25.162 8.12495 24.1745 8.12495 23.562 8.73745L13.1745 19.125C12.687 19.6125 12.687 20.4 13.1745 20.8875L23.562 31.275C24.1745 31.8875 25.162 31.8875 25.7745 31.275C26.387 30.6625 26.387 29.675 25.7745 29.0625L16.7245 20L25.787 10.9375C26.387 10.3375 26.387 9.33745 25.7745 8.73745Z" fill="white"/>
                    <path d="M26.5194 8.47002C25.8807 7.84333 24.851 7.84333 24.2124 8.47002L13.3812 19.0983C12.8729 19.5971 12.8729 20.4029 13.3812 20.9017L24.2124 31.53C24.851 32.1567 25.8807 32.1567 26.5194 31.53C27.158 30.9033 27.158 29.8929 26.5194 29.2662L17.0829 19.9936L26.5324 10.721C27.158 10.1071 27.158 9.08393 26.5194 8.47002Z" fill="white"/>
                    <defs>
                    <linearGradient id="paint0_linear_1783_6568" x1="-10.35" y1="4.33761e-08" x2="48.5753" y2="36.4524" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#ED4A8A"/>
                    <stop offset="1" stop-color="#9A6AFF"/>
                    </linearGradient>
                    </defs>
                </svg>
            </a>
            @endif

            @if($initial)
                <div class="flex place-content-center">
                    <img src="{{ asset('assets/images/placeholders/auth.png') }}" class="" alt="">
                </div>
                <p class="text-2xl mt-1">Авторизуйся</p>
                <p class="mt-6">По номеру телефона</p>
                <div class="flex flex-row mt-6 w-full">
                    <p class="mt-6 py-2 px-2 rounded-lg border-darkgray border-2 mr-2">+7</p>
                    <p wire:click="openPhoneAuthScreen" class="mt-6 py-2 px-2 rounded-lg border-darkgray border-2 text-darkgray cursor-pointer grow"><span class="text-black">|</span>(999)-999-99-99</p>
                </div>
                <p class="mt-6">По электронной почте</p>
                <p wire:click="openEmailAuthScreen" class="mt-6 py-2 px-1 rounded-lg border-darkgray border-2 text-darkgray cursor-pointer"><span class="text-black">|</span>RisRoll@mail.ru</p>

                <p class="mt-4 center text-xs">Авторизовываясь на сайте</p>
                <p class="mt-1 center text-xs">я соглашаюсь с <span class="underline">условиями использования</span></p>

                <div class="shadow-button-shadow bg-darkgray w-full px-5 text-white text-2xl place-content-center py-3 mt-4 rounded-2xl flex">Войти</div>
            @endif

            @if($phoneAuthorization)
                <div class="flex place-content-center">
                    <img src="{{ asset('assets/images/placeholders/auth.png') }}" class="" alt="">
                </div>
                <p class="text-2xl mt-1">Авторизуйся</p>
                <p class="mt-6">Напиши свой номер телефона,<br>чтобы войти на сайт</p>
                <div class="flex flex-row mt-1 w-full">
                    <p class="mt-2 py-2 px-2 rounded-lg border-darkgray border-2 mr-2">+7</p>
                    <input class="mt-2 py-2 px-2 rounded-lg border-darkgray border-2 grow" placeholder="(999)-999-99-99"></input>
                </div>

                <p class="mt-10 center text-xs">Авторизовываясь на сайте</p>
                <p class="mt-1 center text-xs">я соглашаюсь с <span class="underline">условиями использования</span></p>

                <div wire:click="openPhoneConfirmScreen"  class="shadow-button-shadow bg-gradient-to-br from-gradient-pink to bg-gradient-purple w-full px-5 text-white text-2xl place-content-center py-3 mt-4 rounded-2xl flex cursor-pointer">Войти</div>
            @endif

            @if($phoneConfirmation)
                <p class="mt-8">Введите 4-х значный код<br>подтверждения, отправленный на<br>ваш номер телефона</p>
                <div class="flex flex-row mt-12 justify-center space-x-1">
                    <input maxlenght="1" required class="max-w-12 py-2 px-2 rounded-lg border-lightgray border-2 text-2xl"></input>
                    <input required class="max-w-12 py-2 px-2 rounded-lg border-lightgray border-2 text-2xl"></input>
                    <input required class="max-w-12 py-2 px-2 rounded-lg border-lightgray border-2 text-2xl"></input>
                    <input required class="max-w-12 py-2 px-2 rounded-lg border-lightgray border-2 text-2xl"></input>
                </div>

                <div class="mt-8 flex justify-center">
                    <svg width="130" height="130" viewBox="0 0 130 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M65 -2.84124e-06C100.899 -4.41041e-06 130 29.1015 130 65C130 100.899 100.899 130 65 130C29.1015 130 -1.27207e-06 100.899 -2.84124e-06 65C-4.41041e-06 29.1015 29.1015 -1.27207e-06 65 -2.84124e-06ZM65 119.6C95.1547 119.6 119.6 95.1547 119.6 65C119.6 34.8452 95.1547 10.4 65 10.4C34.8452 10.4 10.4 34.8453 10.4 65C10.4 95.1547 34.8453 119.6 65 119.6Z" fill="url(#paint0_linear_415_4029)"/>
                        <path d="M52.9953 62C50.8886 62 49.1553 62.6533 47.7953 63.96C46.462 65.24 45.7953 66.88 45.7953 68.88C45.7953 70.88 46.382 72.6933 47.5553 74.32C48.7286 75.92 50.502 76.72 52.8753 76.72C55.0886 76.72 56.8086 76.0667 58.0353 74.76C59.2886 73.4533 59.9153 71.5733 59.9153 69.12C59.9153 66.96 59.2753 65.24 57.9953 63.96C56.742 62.6533 55.0753 62 52.9953 62ZM52.8753 79.4C45.942 79.4 42.4753 75 42.4753 66.2C42.4753 60.5733 43.502 56.3733 45.5553 53.6C47.6353 50.8 50.582 49.4 54.3953 49.4C55.8886 49.4 57.4086 49.5867 58.9553 49.96C59.3553 50.0667 59.6753 50.2933 59.9153 50.64C60.1553 50.96 60.2753 51.3333 60.2753 51.76C60.2753 52.1067 60.1286 52.3867 59.8353 52.6C59.5686 52.7867 59.2753 52.8267 58.9553 52.72C57.5686 52.2933 56.0486 52.08 54.3953 52.08C51.942 52.08 49.942 53.0133 48.3953 54.88C46.8753 56.72 46.022 59.3867 45.8353 62.88C45.8353 62.9067 45.8486 62.92 45.8753 62.92C45.9286 62.92 45.9553 62.9067 45.9553 62.88C47.582 60.64 50.1553 59.52 53.6753 59.52C56.5553 59.52 58.8486 60.4 60.5553 62.16C62.262 63.8933 63.1153 66.2133 63.1153 69.12C63.1153 72.32 62.182 74.84 60.3153 76.68C58.4753 78.4933 55.9953 79.4 52.8753 79.4ZM82.88 54.96C81.68 52.9867 79.8533 52 77.4 52C74.9467 52 73.1067 52.9867 71.88 54.96C70.68 56.9067 70.08 60.0533 70.08 64.4C70.08 68.7467 70.68 71.9067 71.88 73.88C73.1067 75.8267 74.9467 76.8 77.4 76.8C79.8533 76.8 81.68 75.8267 82.88 73.88C84.1067 71.9067 84.72 68.7467 84.72 64.4C84.72 60.0533 84.1067 56.9067 82.88 54.96ZM85.16 75.92C83.32 78.24 80.7333 79.4 77.4 79.4C74.0667 79.4 71.48 78.24 69.64 75.92C67.8 73.6 66.88 69.76 66.88 64.4C66.88 59.04 67.8 55.2 69.64 52.88C71.48 50.56 74.0667 49.4 77.4 49.4C80.7333 49.4 83.32 50.56 85.16 52.88C87 55.2 87.92 59.04 87.92 64.4C87.92 69.76 87 73.6 85.16 75.92Z" fill="black"/>
                        <path d="M58.2439 94.14C57.1426 94.14 56.2932 93.8227 55.6959 93.188C55.1079 92.544 54.8139 91.6013 54.8139 90.36C54.8139 89.128 55.0986 88.19 55.6679 87.546C56.2466 86.902 57.0586 86.58 58.1039 86.58C58.5892 86.58 59.1026 86.6313 59.6439 86.734C59.7746 86.762 59.8819 86.832 59.9659 86.944C60.0592 87.0467 60.1059 87.168 60.1059 87.308C60.1059 87.42 60.0546 87.5087 59.9519 87.574C59.8586 87.6393 59.7559 87.658 59.6439 87.63C59.1679 87.5087 58.6779 87.448 58.1739 87.448C56.6806 87.448 55.9339 88.4187 55.9339 90.36C55.9339 91.368 56.1299 92.1053 56.5219 92.572C56.9139 93.0387 57.5112 93.272 58.3139 93.272C58.8366 93.272 59.3126 93.202 59.7419 93.062C59.8446 93.0247 59.9426 93.0387 60.0359 93.104C60.1292 93.1693 60.1759 93.258 60.1759 93.37C60.1759 93.51 60.1339 93.636 60.0499 93.748C59.9659 93.86 59.8539 93.9347 59.7139 93.972C59.2752 94.084 58.7852 94.14 58.2439 94.14ZM64.9382 87.392C63.6409 87.392 62.9315 88.162 62.8102 89.702C62.8102 89.7767 62.8522 89.814 62.9362 89.814H66.7022C66.7769 89.814 66.8142 89.7767 66.8142 89.702C66.7582 88.162 66.1329 87.392 64.9382 87.392ZM65.2322 94.14C64.0842 94.14 63.2115 93.8273 62.6142 93.202C62.0169 92.5673 61.7182 91.62 61.7182 90.36C61.7182 89.0627 62.0029 88.1107 62.5722 87.504C63.1509 86.888 63.9395 86.58 64.9382 86.58C66.7769 86.58 67.7522 87.6673 67.8642 89.842C67.8735 90.066 67.7942 90.2573 67.6262 90.416C67.4675 90.5653 67.2762 90.64 67.0522 90.64H62.9082C62.8335 90.64 62.7962 90.682 62.7962 90.766C62.8802 92.474 63.7249 93.328 65.3302 93.328C65.8622 93.328 66.4082 93.23 66.9682 93.034C67.0709 92.9967 67.1689 93.0107 67.2622 93.076C67.3555 93.132 67.4022 93.216 67.4022 93.328C67.4022 93.6453 67.2575 93.8413 66.9682 93.916C66.3709 94.0653 65.7922 94.14 65.2322 94.14ZM70.46 93.846C70.3573 93.9487 70.2313 94 70.082 94C69.9327 94 69.8067 93.9487 69.704 93.846C69.6013 93.7433 69.55 93.6173 69.55 93.468V87.252C69.55 87.1027 69.6013 86.9767 69.704 86.874C69.8067 86.7713 69.9327 86.72 70.082 86.72C70.2313 86.72 70.3573 86.7713 70.46 86.874C70.5627 86.9767 70.614 87.1027 70.614 87.252V89.954C70.614 89.9633 70.6187 89.968 70.628 89.968L70.656 89.954L73.68 87.168C73.9973 86.8693 74.38 86.72 74.828 86.72C74.9493 86.72 75.0287 86.776 75.066 86.888C75.1127 87 75.094 87.0933 75.01 87.168L71.762 90.136C71.6967 90.192 71.692 90.248 71.748 90.304L75.052 93.538C75.1267 93.6127 75.1407 93.7107 75.094 93.832C75.0473 93.944 74.968 94 74.856 94C74.4173 94 74.044 93.846 73.736 93.538L70.656 90.486C70.6467 90.4767 70.6373 90.472 70.628 90.472C70.6187 90.472 70.614 90.4767 70.614 90.486V93.468C70.614 93.6173 70.5627 93.7433 70.46 93.846Z" fill="black"/>
                        <defs>
                        <linearGradient id="paint0_linear_415_4029" x1="1.61131e-06" y1="163.637" x2="118.47" y2="-27.8697" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#ED4A8A"/>
                        <stop offset="1" stop-color="#9A6AFF"/>
                        </linearGradient>
                        </defs>
                    </svg>
                </div>

                <div class="mt-10 flex justify-center">
                    <p wire:click="openPhoneConfirmScreen" class=" center text-xs text-gradient-purple">Отправить код еще раз</p>
                </div>

                <div wire:click="openPhoneSuccessScreen" class="shadow-button-shadow bg-gradient-to-br from-gradient-pink to bg-gradient-purple w-full px-5 text-white text-2xl place-content-center py-3 mt-10 rounded-2xl flex cursor-pointer">Отправить</div>
            @endif

            @if($phoneSuccess)
                <div class="flex flex-col items-center mt-12">
                    <img src="{{ asset('assets/images/placeholders/auth-success.png') }}" class="" alt="">
                    <p class="text-2xl mt-12 font-medium">Номер телефона проверен</p>
                    <p class="mt-10 text-xl text-center">Вы будете перенаправлены<br>на главную страницу</p>
                </div>

                <div wire:click="close"  class="shadow-button-shadow bg-gradient-to-br from-gradient-pink to bg-gradient-purple w-full px-5 text-white text-2xl place-content-center py-3 mt-24 rounded-2xl flex cursor-pointer">Вернуться</div>
            @endif

            @if($emailAuthorization)
            <div class="flex place-content-center">
                    <img src="{{ asset('assets/images/placeholders/auth.png') }}" class="" alt="">
                </div>
                <p class="text-2xl mt-1">Авторизуйся</p>
                <p class="mt-6">Напиши свою электронную почту,<br>чтобы войти на сайт</p>
                <div class="flex flex-row mt-1 w-full">
                    <input class="mt-2 py-2 px-2 rounded-lg border-darkgray border-2 grow" placeholder="RisRoll@mail.ru"></input>
                </div>

                <p class="mt-10 center text-xs">Авторизовываясь на сайте</p>
                <p class="mt-1 center text-xs">я соглашаюсь с <span class="underline">условиями использования</span></p>

                <div wire:click="openEmailConfirmScreen" class="shadow-button-shadow bg-gradient-to-br from-gradient-pink to bg-gradient-purple w-full px-5 text-white text-2xl place-content-center py-3 mt-4 rounded-2xl flex">Войти</div>
            @endif


            @if($emailConfirmation)
                <p class="mt-8">Введите 4-х значный код<br>подтверждения, отправленный на<br>вашу электронную почту</p>
                <div class="flex flex-row mt-12 justify-center space-x-1">
                    <input maxlenght="1" required class="max-w-12 py-2 px-2 rounded-lg border-lightgray border-2 text-2xl"></input>
                    <input required class="max-w-12 py-2 px-2 rounded-lg border-lightgray border-2 text-2xl"></input>
                    <input required class="max-w-12 py-2 px-2 rounded-lg border-lightgray border-2 text-2xl"></input>
                    <input required class="max-w-12 py-2 px-2 rounded-lg border-lightgray border-2 text-2xl"></input>
                </div>

                <div class="mt-8 flex justify-center">
                    <svg width="130" height="130" viewBox="0 0 130 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M65 -2.84124e-06C100.899 -4.41041e-06 130 29.1015 130 65C130 100.899 100.899 130 65 130C29.1015 130 -1.27207e-06 100.899 -2.84124e-06 65C-4.41041e-06 29.1015 29.1015 -1.27207e-06 65 -2.84124e-06ZM65 119.6C95.1547 119.6 119.6 95.1547 119.6 65C119.6 34.8452 95.1547 10.4 65 10.4C34.8452 10.4 10.4 34.8453 10.4 65C10.4 95.1547 34.8453 119.6 65 119.6Z" fill="url(#paint0_linear_415_4029)"/>
                        <path d="M52.9953 62C50.8886 62 49.1553 62.6533 47.7953 63.96C46.462 65.24 45.7953 66.88 45.7953 68.88C45.7953 70.88 46.382 72.6933 47.5553 74.32C48.7286 75.92 50.502 76.72 52.8753 76.72C55.0886 76.72 56.8086 76.0667 58.0353 74.76C59.2886 73.4533 59.9153 71.5733 59.9153 69.12C59.9153 66.96 59.2753 65.24 57.9953 63.96C56.742 62.6533 55.0753 62 52.9953 62ZM52.8753 79.4C45.942 79.4 42.4753 75 42.4753 66.2C42.4753 60.5733 43.502 56.3733 45.5553 53.6C47.6353 50.8 50.582 49.4 54.3953 49.4C55.8886 49.4 57.4086 49.5867 58.9553 49.96C59.3553 50.0667 59.6753 50.2933 59.9153 50.64C60.1553 50.96 60.2753 51.3333 60.2753 51.76C60.2753 52.1067 60.1286 52.3867 59.8353 52.6C59.5686 52.7867 59.2753 52.8267 58.9553 52.72C57.5686 52.2933 56.0486 52.08 54.3953 52.08C51.942 52.08 49.942 53.0133 48.3953 54.88C46.8753 56.72 46.022 59.3867 45.8353 62.88C45.8353 62.9067 45.8486 62.92 45.8753 62.92C45.9286 62.92 45.9553 62.9067 45.9553 62.88C47.582 60.64 50.1553 59.52 53.6753 59.52C56.5553 59.52 58.8486 60.4 60.5553 62.16C62.262 63.8933 63.1153 66.2133 63.1153 69.12C63.1153 72.32 62.182 74.84 60.3153 76.68C58.4753 78.4933 55.9953 79.4 52.8753 79.4ZM82.88 54.96C81.68 52.9867 79.8533 52 77.4 52C74.9467 52 73.1067 52.9867 71.88 54.96C70.68 56.9067 70.08 60.0533 70.08 64.4C70.08 68.7467 70.68 71.9067 71.88 73.88C73.1067 75.8267 74.9467 76.8 77.4 76.8C79.8533 76.8 81.68 75.8267 82.88 73.88C84.1067 71.9067 84.72 68.7467 84.72 64.4C84.72 60.0533 84.1067 56.9067 82.88 54.96ZM85.16 75.92C83.32 78.24 80.7333 79.4 77.4 79.4C74.0667 79.4 71.48 78.24 69.64 75.92C67.8 73.6 66.88 69.76 66.88 64.4C66.88 59.04 67.8 55.2 69.64 52.88C71.48 50.56 74.0667 49.4 77.4 49.4C80.7333 49.4 83.32 50.56 85.16 52.88C87 55.2 87.92 59.04 87.92 64.4C87.92 69.76 87 73.6 85.16 75.92Z" fill="black"/>
                        <path d="M58.2439 94.14C57.1426 94.14 56.2932 93.8227 55.6959 93.188C55.1079 92.544 54.8139 91.6013 54.8139 90.36C54.8139 89.128 55.0986 88.19 55.6679 87.546C56.2466 86.902 57.0586 86.58 58.1039 86.58C58.5892 86.58 59.1026 86.6313 59.6439 86.734C59.7746 86.762 59.8819 86.832 59.9659 86.944C60.0592 87.0467 60.1059 87.168 60.1059 87.308C60.1059 87.42 60.0546 87.5087 59.9519 87.574C59.8586 87.6393 59.7559 87.658 59.6439 87.63C59.1679 87.5087 58.6779 87.448 58.1739 87.448C56.6806 87.448 55.9339 88.4187 55.9339 90.36C55.9339 91.368 56.1299 92.1053 56.5219 92.572C56.9139 93.0387 57.5112 93.272 58.3139 93.272C58.8366 93.272 59.3126 93.202 59.7419 93.062C59.8446 93.0247 59.9426 93.0387 60.0359 93.104C60.1292 93.1693 60.1759 93.258 60.1759 93.37C60.1759 93.51 60.1339 93.636 60.0499 93.748C59.9659 93.86 59.8539 93.9347 59.7139 93.972C59.2752 94.084 58.7852 94.14 58.2439 94.14ZM64.9382 87.392C63.6409 87.392 62.9315 88.162 62.8102 89.702C62.8102 89.7767 62.8522 89.814 62.9362 89.814H66.7022C66.7769 89.814 66.8142 89.7767 66.8142 89.702C66.7582 88.162 66.1329 87.392 64.9382 87.392ZM65.2322 94.14C64.0842 94.14 63.2115 93.8273 62.6142 93.202C62.0169 92.5673 61.7182 91.62 61.7182 90.36C61.7182 89.0627 62.0029 88.1107 62.5722 87.504C63.1509 86.888 63.9395 86.58 64.9382 86.58C66.7769 86.58 67.7522 87.6673 67.8642 89.842C67.8735 90.066 67.7942 90.2573 67.6262 90.416C67.4675 90.5653 67.2762 90.64 67.0522 90.64H62.9082C62.8335 90.64 62.7962 90.682 62.7962 90.766C62.8802 92.474 63.7249 93.328 65.3302 93.328C65.8622 93.328 66.4082 93.23 66.9682 93.034C67.0709 92.9967 67.1689 93.0107 67.2622 93.076C67.3555 93.132 67.4022 93.216 67.4022 93.328C67.4022 93.6453 67.2575 93.8413 66.9682 93.916C66.3709 94.0653 65.7922 94.14 65.2322 94.14ZM70.46 93.846C70.3573 93.9487 70.2313 94 70.082 94C69.9327 94 69.8067 93.9487 69.704 93.846C69.6013 93.7433 69.55 93.6173 69.55 93.468V87.252C69.55 87.1027 69.6013 86.9767 69.704 86.874C69.8067 86.7713 69.9327 86.72 70.082 86.72C70.2313 86.72 70.3573 86.7713 70.46 86.874C70.5627 86.9767 70.614 87.1027 70.614 87.252V89.954C70.614 89.9633 70.6187 89.968 70.628 89.968L70.656 89.954L73.68 87.168C73.9973 86.8693 74.38 86.72 74.828 86.72C74.9493 86.72 75.0287 86.776 75.066 86.888C75.1127 87 75.094 87.0933 75.01 87.168L71.762 90.136C71.6967 90.192 71.692 90.248 71.748 90.304L75.052 93.538C75.1267 93.6127 75.1407 93.7107 75.094 93.832C75.0473 93.944 74.968 94 74.856 94C74.4173 94 74.044 93.846 73.736 93.538L70.656 90.486C70.6467 90.4767 70.6373 90.472 70.628 90.472C70.6187 90.472 70.614 90.4767 70.614 90.486V93.468C70.614 93.6173 70.5627 93.7433 70.46 93.846Z" fill="black"/>
                        <defs>
                        <linearGradient id="paint0_linear_415_4029" x1="1.61131e-06" y1="163.637" x2="118.47" y2="-27.8697" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#ED4A8A"/>
                        <stop offset="1" stop-color="#9A6AFF"/>
                        </linearGradient>
                        </defs>
                    </svg>
                </div>

                <div class="mt-10 flex justify-center">
                    <p wire:click="openPhoneConfirmScreen" class=" center text-xs text-gradient-purple">Отправить код еще раз</p>
                </div>

                <div wire:click="openEmailSuccessScreen" class="mt-10 shadow-button-shadow bg-gradient-to-br from-gradient-pink to bg-gradient-purple w-full px-5 text-white text-2xl place-content-center py-3 rounded-2xl flex cursor-pointer">Отправить</div>
            @endif

            @if($emailSuccess)
                <div class="flex flex-col items-center mt-12">
                    <img src="{{ asset('assets/images/placeholders/auth-success.png') }}" class="" alt="">
                    <p class="text-2xl mt-12 font-medium">Почта проверена</p>
                    <p class="mt-10 text-xl text-center">Вы будете перенаправлены<br>на главную страницу</p>
                </div>

                <div wire:click="close"  class="shadow-button-shadow bg-gradient-to-br from-gradient-pink to bg-gradient-purple w-full px-5 text-white text-2xl place-content-center py-3 mt-24 rounded-2xl flex cursor-pointer">Вернуться</div>
            @endif

        </div>   
    </div>
    @endif
</div>
