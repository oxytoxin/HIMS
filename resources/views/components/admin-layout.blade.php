@props(['header' => ''])

@extends('layouts.root')

@section('content')
    <div class="min-h-full">
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="relative z-40 lg:hidden"
            role="dialog"
            aria-modal="true">

            <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

            <div class="fixed inset-0 z-40 flex">

                <div class="relative flex w-full max-w-xs flex-1 flex-col bg-white pt-5 pb-4">

                    <div class="absolute top-0 right-0 -mr-12 pt-2">
                        <button type="button"
                            class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                            <span class="sr-only">Close sidebar</span>
                            <!-- Heroicon name: outline/x-mark -->
                            <svg class="h-6 w-6 text-white"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="flex flex-shrink-0 items-center px-4">
                        <img class="h-8 w-auto"
                            src="https://tailwindui.com/img/logos/mark.svg?color=purple&shade=500"
                            alt="Your Company">
                    </div>
                    <div class="mt-5 h-0 flex-1 overflow-y-auto">
                        <nav class="px-2">
                            <div class="space-y-1">
                                <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:text-gray-900 hover:bg-gray-50" -->
                                <a href="#"
                                    class="group flex items-center rounded-md bg-gray-100 px-2 py-2 text-base font-medium leading-5 text-gray-900"
                                    aria-current="page">
                                    <!--
                                                                                                                                                                                                                        Heroicon name: outline/home

                                                                                                                                                                                                                        Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"
                                                                                                                                                                                                                      -->
                                    <svg class="mr-3 h-6 w-6 flex-shrink-0 text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    Home
                                </a>

                                <a href="#"
                                    class="group flex items-center rounded-md px-2 py-2 text-base font-medium leading-5 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                                    <!-- Heroicon name: outline/bars-4 -->
                                    <svg class="mr-3 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                                    </svg>
                                    My tasks
                                </a>

                                <a href="#"
                                    class="group flex items-center rounded-md px-2 py-2 text-base font-medium leading-5 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                                    <!-- Heroicon name: outline/clock -->
                                    <svg class="mr-3 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        aria-hidden="true">
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Recent
                                </a>
                            </div>
                            <div class="mt-8">
                                <h3 class="px-3 text-sm font-medium text-gray-500"
                                    id="mobile-teams-headline">Teams</h3>
                                <div class="mt-1 space-y-1"
                                    role="group"
                                    aria-labelledby="mobile-teams-headline">
                                    <a href="#"
                                        class="group flex items-center rounded-md px-3 py-2 text-base font-medium leading-5 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                                        <span class="mr-4 h-2.5 w-2.5 rounded-full bg-indigo-500"
                                            aria-hidden="true"></span>
                                        <span class="truncate">Engineering</span>
                                    </a>

                                    <a href="#"
                                        class="group flex items-center rounded-md px-3 py-2 text-base font-medium leading-5 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                                        <span class="mr-4 h-2.5 w-2.5 rounded-full bg-green-500"
                                            aria-hidden="true"></span>
                                        <span class="truncate">Human Resources</span>
                                    </a>

                                    <a href="#"
                                        class="group flex items-center rounded-md px-3 py-2 text-base font-medium leading-5 text-gray-600 hover:bg-gray-50 hover:text-gray-900">
                                        <span class="mr-4 h-2.5 w-2.5 rounded-full bg-yellow-500"
                                            aria-hidden="true"></span>
                                        <span class="truncate">Customer Success</span>
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="w-14 flex-shrink-0"
                    aria-hidden="true">
                    <!-- Dummy element to force sidebar to shrink to fit close icon -->
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <x-admin-sidebar />
        <!-- Main column -->
        <div class="flex flex-col lg:pl-64">
            <!-- Search header -->
            <div class="sticky top-0 z-10 flex h-16 flex-shrink-0 border-b border-gray-200 bg-white lg:hidden">
                <!-- Sidebar toggle, controls the 'sidebarOpen' sidebar state. -->
                <button type="button"
                    class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500 lg:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <!-- Heroicon name: outline/bars-3-center-left -->
                    <svg class="h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                    </svg>
                </button>
                <div class="flex flex-1 justify-between px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-1">
                        <form class="flex w-full md:ml-0"
                            action="#"
                            method="GET">
                            <label for="search-field"
                                class="sr-only">Search</label>
                            <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center">
                                    <!-- Heroicon name: mini/magnifying-glass -->
                                    <svg class="h-5 w-5"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input id="search-field"
                                    name="search-field"
                                    class="block h-full w-full border-transparent py-2 pl-8 pr-3 text-gray-900 placeholder-gray-500 focus:border-transparent focus:placeholder-gray-400 focus:outline-none focus:ring-0 sm:text-sm"
                                    placeholder="Search"
                                    type="search">
                            </div>
                        </form>
                    </div>
                    <div class="flex items-center">
                        <!-- Profile dropdown -->
                        <div class="relative ml-3">
                            <div>
                                <button type="button"
                                    class="flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2"
                                    id="user-menu-button"
                                    aria-expanded="false"
                                    aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full"
                                        src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="">
                                </button>
                            </div>

                            <!--
                                                                                                                                                                                                                    Dropdown menu, show/hide based on menu state.

                                                                                                                                                                                                                    Entering: "transition ease-out duration-100"
                                                                                                                                                                                                                      From: "transform opacity-0 scale-95"
                                                                                                                                                                                                                      To: "transform opacity-100 scale-100"
                                                                                                                                                                                                                    Leaving: "transition ease-in duration-75"
                                                                                                                                                                                                                      From: "transform opacity-100 scale-100"
                                                                                                                                                                                                                      To: "transform opacity-0 scale-95"
                                                                                                                                                                                                                  -->
                            <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right divide-y divide-gray-200 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu"
                                aria-orientation="vertical"
                                aria-labelledby="user-menu-button"
                                tabindex="-1">
                                <div class="py-1"
                                    role="none">
                                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem"
                                        tabindex="-1"
                                        id="user-menu-item-0">View profile</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem"
                                        tabindex="-1"
                                        id="user-menu-item-1">Settings</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem"
                                        tabindex="-1"
                                        id="user-menu-item-2">Notifications</a>
                                </div>
                                <div class="py-1"
                                    role="none">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem"
                                        tabindex="-1"
                                        id="user-menu-item-3">Get desktop app</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem"
                                        tabindex="-1"
                                        id="user-menu-item-4">Support</a>
                                </div>
                                <div class="py-1"
                                    role="none">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem"
                                        tabindex="-1"
                                        id="user-menu-item-5">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <main class="flex-1">
                <!-- Page title & actions -->
                <div
                    class="sticky top-0 border-b border-gray-200 bg-white px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
                    <div class="min-w-0 flex-1">
                        {{ $header }}
                    </div>
                    <div class="mt-4 flex space-x-3 sm:mt-0 sm:ml-4">
                        <x-button>Settings</x-button>
                        <x-button>Log Out</x-button>
                    </div>
                </div>
                <div class="mb-10 p-8">
                    {{ $slot }}
                </div>
            </main>
            <footer>
                <div class="fixed bottom-0 w-full border-t border-gray-200 bg-white/30 py-2 backdrop-blur-sm">
                    <div class="mx-auto max-w-2xl">
                        <p class="text-base text-gray-400">&copy;
                            {{ date('Y') }}
                            J7 IT SOLUTION & SERVICES. All rights reserved.
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <x-alert />
@endsection
