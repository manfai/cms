<header class="pb-24 bg-main">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="relative py-5 flex items-center justify-center lg:justify-between">
            <!-- Logo -->
            <div class="absolute left-0 flex-shrink-0 lg:static">
                <a href="#">
                    <span class="sr-only">Workflow</span>
                    {{-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-300.svg" alt="Workflow"> --}}
                    <div class="logo">
                        <img style="filter: brightness(0) invert(1);"
                            src="https://restore.space/wp-content/uploads/2018/01/%E5%8E%9F%E5%AD%98LOGO_25-1-03.svg"
                            class="hidden md:block h-6">
                        <img src="https://restore.space/wp-content/uploads/2021/08/WebsiteSloganLogo-01.svg"
                            class="block md:hidden h-6">
                    </div>
                </a>
            </div>

            <!-- Right section on desktop -->
            <div class="hidden lg:ml-4 lg:flex lg:items-center lg:pr-0.5">
                <button type="button"
                    class="flex-shrink-0 p-1 text-gray-200 rounded-full hover:text-white hover:bg-white hover:bg-opacity-10 focus:outline-none focus:ring-2 focus:ring-white">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>

                <!-- Profile dropdown -->
                <div x-data="{ open: false }" class="ml-4 relative flex-shrink-0">
                    <div>
                        <button type="button" @click="open = true"
                            class="bg-white rounded-full flex text-sm ring-2 ring-white ring-opacity-20 focus:outline-none focus:ring-opacity-100"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </button>
                    </div>

                    <!--
                        Dropdown menu, show/hide based on menu state.
        
                        Entering: ""
                        From: ""
                        To: ""
                        Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->
                    <div x-show="open" @click.away="open = false"
                        class="origin-top-right z-40 absolute -right-2 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="user-menu-item-0">Your Profile</a>

                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="user-menu-item-1">Settings</a>

                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="user-menu-item-2">Sign out</a>
                    </div>
                </div>
            </div>

            <!-- Search -->
            <div class="flex-1 min-w-0 px-12 lg:hidden">
                <div class="max-w-xs w-full mx-auto">
                    <label for="desktop-search" class="sr-only">Search</label>
                    <div class="relative text-white focus-within:text-gray-600">
                        <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                            <!-- Heroicon name: solid/search -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input id="desktop-search"
                            class="block w-full bg-white bg-opacity-20 py-2 pl-10 pr-3 border border-transparent rounded-md leading-5 text-gray-900 placeholder-white focus:outline-none focus:bg-opacity-100 focus:border-transparent focus:placeholder-gray-500 focus:ring-0 sm:text-sm"
                            placeholder="Search" type="search" name="search">
                    </div>
                </div>
            </div>

            <!-- Menu button -->
            <div class="absolute right-0 flex-shrink-0 lg:hidden">
                <!-- Mobile menu button -->
                <button type="button"
                    class="bg-transparent p-2 rounded-md inline-flex items-center justify-center text-gray-200 hover:text-white hover:bg-white hover:bg-opacity-10 focus:outline-none focus:ring-2 focus:ring-white"
                    aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                 
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
  
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="hidden lg:block border-t border-white border-opacity-20 py-5">
            <div class="grid grid-cols-3 gap-8 items-center">
                <div class="col-span-2">
                    <nav class="flex space-x-4">
                        <!-- Current: "text-white", Default: "text-indigo-100" -->
                        <a href="{{route('admin.dashboard')}}"
                            class="{{Request::is('*/dashboard')?'text-white bg-opacity-20 font-bold':'text-gray-100 bg-opacity-0 font-medium'}} text-sm rounded-md bg-white px-3 py-2 hover:bg-opacity-10"
                            aria-current="page">
                            Dashboard
                        </a>

                        <a href="{{route('admin.pages.index')}}"
                            class="{{Request::is('*/pages*')?'text-white bg-opacity-20 font-bold':'text-gray-100 bg-opacity-0 font-medium'}} text-sm rounded-md bg-white px-3 py-2 hover:bg-opacity-10">
                            Pages
                        </a>

                        <a href="{{route('admin.posts.index')}}"
                            class="{{Request::is('*/posts*')?'text-white bg-opacity-20 font-bold':'text-gray-100 bg-opacity-0 font-medium'}} text-sm rounded-md bg-white px-3 py-2 hover:bg-opacity-10">
                            Posts
                        </a>

                        <a href="{{route('admin.settings')}}"
                            class="{{Request::is('*/settings')?'text-white bg-opacity-20 font-bold':'text-gray-100 bg-opacity-0 font-medium'}} text-sm rounded-md bg-white px-3 py-2 hover:bg-opacity-10">
                            Settings
                        </a>

                        <a href="{{route('admin.seo')}}"
                            class="{{Request::is('*/seo')?'text-white bg-opacity-20 font-bold':'text-gray-100 bg-opacity-0 font-medium'}} text-sm rounded-md bg-white px-3 py-2 hover:bg-opacity-10">
                            SEO
                        </a>
                    </nav>
                </div>
                <div>
                    <div class="max-w-md w-full mx-auto">
                        <label for="mobile-search" class="sr-only">Search</label>
                        <div class="relative text-white focus-within:text-gray-600">
                            <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                                <!-- Heroicon name: solid/search -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input id="mobile-search"
                                class="block w-full bg-white bg-opacity-20 py-2 pl-10 pr-3 border border-transparent rounded-md leading-5 text-gray-900 placeholder-white focus:outline-none focus:bg-opacity-100 focus:border-transparent focus:placeholder-gray-500 focus:ring-0 sm:text-sm"
                                placeholder="Search" type="search" name="search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>