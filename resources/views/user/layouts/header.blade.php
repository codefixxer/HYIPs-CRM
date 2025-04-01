<header class="header-wrapper fixed z-30 hidden w-full md:block">
    <div
        class="relative flex h-[108px] w-full items-center justify-between bg-white px-10 dark:bg-darkblack-600 2xl:px-[76px]">
        <button title="Ctrl+b" type="button" class="drawer-btn absolute left-0 top-auto rotate-180 transform">
            <span>
                <svg width="16" height="40" viewBox="0 0 16 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 10C0 4.47715 4.47715 0 10 0H16V40H10C4.47715 40 0 35.5228 0 30V10Z" fill="#22C55E" />
                    <path d="M10 15L6 20.0049L10 25.0098" stroke="#ffffff" stroke-width="1.2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </span>
        </button>
        <!--              page-title-->
        <div>
            <h3 class="text-xl font-bold text-bgray-900 dark:text-bgray-50 lg:text-3xl lg:leading-[36.4px]">
                Dashboard
            </h3>
            <p class="text-xs font-medium text-bgray-600 dark:text-bgray-50 lg:text-sm lg:leading-[25.2px]">
                Let’s check your update today
            </p>
        </div>
        <!--              search-bar-->
        <div class="searchbar-wrapper">
            <div
                class="px flex h-[56px] w-[300px] items-center justify-between rounded-lg border border-transparent bg-bgray-50 px-4 focus-within:border-success-300 dark:bg-darkblack-500 lg:w-[400px]">
                <div class="flex w-full items-center space-x-3.5">
                    <span>
                        <svg class="stroke-bgray-900 dark:stroke-bgray-50" width="20" height="20"
                            viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="9.78639" cy="9.78602" r="8.23951" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M15.5176 15.9447L18.7479 19.1667" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                    <label for="search" class="w-full">
                        <input type="text" id="search" placeholder="Search..."
                            class="search-input w-full border-none bg-bgray-50 bg-none px-0 text-sm tracking-wide text-bgray-600 placeholder:text-sm placeholder:font-semibold focus:outline-none focus:ring-0 dark:bg-darkblack-500 dark:placeholder:text-bgray-500" />
                    </label>
                </div>
                <div class="flex items-center space-x-[6px]">
                    <span>
                        <svg class="stroke-bgray-900 dark:stroke-gray-300" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.975 12.3875C5.975 12.8548 5.83644 13.3115 5.57685 13.7C5.31725 14.0885 4.94828 14.3914 4.51659 14.5702C4.0849 14.749 3.60988 14.7958 3.1516 14.7046C2.69332 14.6134 2.27236 14.3884 1.94196 14.058C1.61156 13.7276 1.38655 13.3067 1.2954 12.8484C1.20424 12.3901 1.25102 11.9151 1.42984 11.4834C1.60865 11.0517 1.91146 10.6827 2.29997 10.4232C2.68848 10.1636 3.14524 10.025 3.6125 10.025H12.3875C12.8548 10.025 13.3115 10.1636 13.7 10.4232C14.0885 10.6827 14.3914 11.0517 14.5702 11.4834C14.749 11.9151 14.7958 12.3901 14.7046 12.8484C14.6134 13.3067 14.3884 13.7276 14.058 14.058C13.7276 14.3884 13.3067 14.6134 12.8484 14.7046C12.3901 14.7958 11.9151 14.749 11.4834 14.5702C11.0517 14.3914 10.6827 14.0885 10.4232 13.7C10.1636 13.3115 10.025 12.8548 10.025 12.3875V3.6125C10.025 3.14524 10.1636 2.68848 10.4232 2.29997C10.6827 1.91146 11.0517 1.60865 11.4834 1.42984C11.9151 1.25102 12.3901 1.20424 12.8484 1.2954C13.3067 1.38655 13.7276 1.61156 14.058 1.94196C14.3884 2.27236 14.6134 2.69332 14.7046 3.1516C14.7958 3.60988 14.749 4.0849 14.5702 4.51659C14.3914 4.94828 14.0885 5.31725 13.7 5.57685C13.3115 5.83644 12.8548 5.975 12.3875 5.975H3.6125C3.14524 5.975 2.68848 5.83644 2.29997 5.57685C1.91146 5.31725 1.60865 4.94828 1.42984 4.51659C1.25102 4.0849 1.20424 3.60988 1.2954 3.1516C1.38655 2.69332 1.61156 2.27236 1.94196 1.94196C2.27236 1.61156 2.69332 1.38655 3.1516 1.2954C3.60988 1.20424 4.0849 1.25102 4.51659 1.42984C4.94828 1.60865 5.31725 1.91146 5.57685 2.29997C5.83644 2.68848 5.975 3.14524 5.975 3.6125V12.3875Z"
                                stroke-width="1.5" />
                        </svg>
                    </span>
                    <span class="text-base text-bgray-900 dark:text-bgray-300">K</span>
                </div>
            </div>
        </div>
        <!--  quick access-->
        <div class="quick-access-wrapper relative">
            <div class="flex items-center space-x-[43px]">
                <div class="hidden items-center space-x-5 xl:flex">
                    <button type="button" id="theme-toggle"
                        class="relative flex h-[52px] w-[52px] items-center justify-center rounded-[12px] border border-success-300 dark:border-darkblack-400">
                        <span class="block dark:hidden">
                            <svg class="stroke-bgray-900" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.3284 14.8687C13.249 14.8687 9.13135 10.751 9.13135 5.67163C9.13135 4.74246 9.26914 3.84548 9.5254 3C5.74897 4.14461 3 7.65276 3 11.803C3 16.8824 7.11765 21 12.197 21C16.3472 21 19.8554 18.251 21 14.4746C20.1545 14.7309 19.2575 14.8687 18.3284 14.8687Z"
                                    stroke-width="1.5" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="hidden dark:block">
                            <svg class="stroke-bgray-900 dark:stroke-bgray-50" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="5" stroke-width="1.5" />
                                <path d="M12 2V4" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M12 20V22" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M20.6602 7L18.9281 8" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M5.07178 16L3.33973 17" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M3.33984 7L5.07189 8" stroke-width="1.5" stroke-linecap="round" />
                                <path d="M18.9282 16L20.6603 17" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </span>
                    </button>

                </div>
                <div class="hidden h-[48px] w-[1px] bg-bgray-300 dark:bg-darkblack-400 xl:block"></div>
                <!--                author-->
                <div onclick="profileAction()" class="flex cursor-pointer space-x-0 lg:space-x-3">
                    <div class="h-[52px] w-[52px] overflow-hidden rounded-xl border border-bgray-300">
                        <img class="object-cover" src="{{ asset('assets/images/avatar/profile-52x52.png') }}"
                            alt="avater" />
                    </div>
                    <div class="hidden 2xl:block">
                        <div class="flex items-center space-x-2.5">
                            <h3 class="text-base font-bold leading-[28px] text-bgray-900 dark:text-white">
                                John Doe
                            </h3>
                            <span>
                                <svg class="stroke-bgray-900 dark:stroke-white" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 10L12 14L17 10" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        </div>
                        <p class="text-sm font-medium leading-[20px] text-bgray-600 dark:text-bgray-50">
                            Investor
                        </p>
                    </div>
                </div>
            </div>
            <!--                notification ,message, store-->
         
            <div class="profile-wrapper">
                <div onclick="profileAction()" class="profile-outside fixed -left-[43px] top-0 hidden h-full w-full">
                </div>
                <div style="
      filter: drop-shadow(12px 12px 40px rgba(0, 0, 0, 0.08));
    "
                    class="profile-box absolute right-0 top-[81px] hidden w-[300px] overflow-hidden rounded-lg bg-white dark:bg-darkblack-600">
                    <div class="relative w-full px-3 py-2">
                        <div>
                            <ul>

                                <li class="w-full">
                                    <a href="#">
                                        <div
                                            class="flex items-center space-x-[18px] rounded-lg p-[14px] text-success-300">
                                            <div class="w-[20px]">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15 10L13.7071 11.2929C13.3166 11.6834 13.3166 12.3166 13.7071 12.7071L15 14M14 12L22 12M6 20C3.79086 20 2 18.2091 2 16V8C2 5.79086 3.79086 4 6 4M6 20C8.20914 20 10 18.2091 10 16V8C10 5.79086 8.20914 4 6 4M6 20H14C16.2091 20 18 18.2091 18 16M6 4H14C16.2091 4 18 5.79086 18 8"
                                                            stroke="#22C55E" stroke-width="1.5"
                                                            stroke-linecap="round" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="flex items-center w-full text-left">
                                                    <div class="flex-1">
                                                        <span class="text-sm font-semibold">Log Out</span>
                                                    </div>
                                                </button>
                                            </form>

                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="my-[14px] h-[1px] w-full bg-bgray-300"></div>
                        <div>
                            <ul>
                                <li class="w-full">
                                    <a href="settings.html">
                                        <div
                                            class="rounded-lg p-[14px] text-bgray-600 hover:bg-bgray-100 hover:text-bgray-900 dark:text-bgray-50 dark:hover:bg-darkblack-500">
                                            <span class="text-sm font-semibold">Settings</span>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<header class="mobile-wrapper fixed z-20 block w-full md:hidden">
    <div class="flex h-[80px] w-full items-center justify-between bg-white dark:bg-darkblack-600">
        <div class="flex h-full w-full items-center space-x-5">
            <button type="button" class="drawer-btn rotate-180 transform">
                <span>
                    <svg width="16" height="40" viewBox="0 0 16 40" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 10C0 4.47715 4.47715 0 10 0H16V40H10C4.47715 40 0 35.5228 0 30V10Z"
                            fill="#F7F7F7" />
                        <path d="M10 15L6 20.0049L10 25.0098" stroke="#A0AEC0" stroke-width="1.2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </button>
            <div>
                {{-- <a href="/">
                    <img src="{{ asset('assets/images/logo/logo-color.svg') }}" class="block dark:hidden"
                        alt="logo" />
                    <img src="{{ asset('assets/images/logo/logo-white.svg') }}" class="hidden dark:block"
                        alt="logo" />
                </a> --}}
                <a class="logo-container" href="{{ route('user.dashboard') }}">
                    <div class="logo-frame">
                        <img src="{{ asset('asset/img/logo.png') }}" alt="Solana Logo" class="logo">
                    </div>
                    <span class="app-name">Solana</span>
                </a>
            
            
                <style>
                    /* Style for the logo container */
                    .logo-container {
                        display: flex;
                        align-items: center;
                        text-decoration: none;
                        /* Remove link underline */
                    }
            
                    /* Logo frame to give it a nice border and padding */
                    .logo-frame {
                        /* background-color: #333; Dark background for contrast */
                        padding: 10px;
                        border-radius: 12px;
                        /* Rounded corners */
                        /* box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); Subtle shadow for depth */
                        display: inline-block;
                    }
            
                    /* Styling the logo itself */
                    .logo {
                        width: 70px;
                        height: auto;
                    }
            
                    /* App name styling */
                    .app-name {
                        font-size: 24px;
                        font-weight: bold;
                        color: #FFFFFF;
                        /* White text for contrast */
                        margin-right: 15px;
                        Space between the logo and the text font-family: 'Arial', sans-serif;
                    }
                </style>
            </div>
        </div>
        <div class="mr-2">
            <div onclick="profileAction()" class="flex cursor-pointer space-x-0 lg:space-x-3">
                <div class="h-[52px] w-[52px] overflow-hidden rounded-xl border border-bgray-300">
                    <img class="object-cover" src="{{ asset('assets/images/avatar/profile-52x52.png') }}"
                        alt="avater" />
                </div>
                <div class="hidden 2xl:block">
                    <div class="flex items-center space-x-2.5">
                        <h3 class="text-base font-bold leading-[28px] text-bgray-900">
                            John Doe
                        </h3>
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 10L12 14L17 10" stroke="#28303F" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                    <p class="text-sm font-medium leading-[20px] text-bgray-600">
                        Super Admin
                    </p>
                </div>
            </div>

            <div class="profile-wrapper">
                <div onclick="profileAction()" class="profile-outside fixed -left-[43px] top-0 hidden h-full w-full">
                </div>
                <div style="
      filter: drop-shadow(12px 12px 40px rgba(0, 0, 0, 0.08));
    "
                    class="profile-box absolute right-0 top-[81px] hidden w-[300px] overflow-hidden rounded-lg bg-white">
                    <div class="relative w-full px-3 py-2">
                        <div>
                            <ul>

                                <li class="w-full">
                                    <a href="#">
                                        <div
                                            class="flex items-center space-x-[18px] rounded-lg p-[14px] text-success-300">
                                            <div class="w-[20px]">
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15 10L13.7071 11.2929C13.3166 11.6834 13.3166 12.3166 13.7071 12.7071L15 14M14 12L22 12M6 20C3.79086 20 2 18.2091 2 16V8C2 5.79086 3.79086 4 6 4M6 20C8.20914 20 10 18.2091 10 16V8C10 5.79086 8.20914 4 6 4M6 20H14C16.2091 20 18 18.2091 18 16M6 4H14C16.2091 4 18 5.79086 18 8"
                                                            stroke="#22C55E" stroke-width="1.5"
                                                            stroke-linecap="round" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="flex items-center w-full text-left">
                                                    <div class="flex-1">
                                                        <span class="text-sm font-semibold">Log Out</span>
                                                    </div>
                                                </button>
                                            </form>

                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="my-[14px] h-[1px] w-full bg-bgray-300"></div>
                        <div>
                            <ul>
                                <li class="w-full">
                                    <a href="settings.html">
                                        <div
                                            class="rounded-lg p-[14px] text-bgray-600 hover:bg-bgray-100 hover:text-bgray-900">
                                            <span class="text-sm font-semibold">Settings</span>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
