<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config("app.name", "Laravel") }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />

        <!-- styles -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
            rel="stylesheet"
        />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body
        x-data="{listing:null, listView: null, auction: false}"
        class="font-sans flex antialiased myBg h-screen w-screen"
    >
        <section
            class="min-w-40 h-full px-8 py-2 flex flex-col border-0 border-r-2"
        >
            <div>
                <img src="/storage/images/logo.png" class="w-24 mx-auto" />
            </div>
            <div class="text-lg font-semibold capitalize flex-1 flex flex-col">
                <div class="whitespace-nowrap space-y-4 text-white">

                    @canany(["is-seller","is-buyer"])
                    <x-side-bar-link
                        icon="fas fa-home"
                        title="Home"
                        :active="request()->is('')"
                        routeName="home"
                    />
                    @endcanany
                    <x-side-bar-link
                        icon="fas fa-chart-area"
                        title="Analytics"
                        :active="request()->is('app/analytic')"
                        routeName="analytics"
                    />

                    <x-side-bar-link
                        icon="fas fa-bell"
                        title="Notifications"
                        :active="request()->is('app/notifications')"
                        routeName="notifications"
                    />

                    @can("is-admin")
                    <x-side-bar-link
                        icon="fas fa-list"
                        title="listing"
                        :active="request()->is('admin/listings')"
                        routeName="listings"
                    />
                    @endcan
                    
                    @can("is-buyer")
                        <x-side-bar-link
                        icon="fas fa-shipping-fast"
                        title="Your Auctions"
                        :active="request()->is('app/auctions-entered')"
                        routeName="entered"
                    />
                    @endcan
                      
                   @can("is-seller")
                    <x-side-bar-link
                        icon="fas fa-plus"
                        title="list"
                        :active="request()->is('seller/list')"
                        routeName="list_car"
                    />

                   
                    <x-side-bar-link
                        icon="fas fa-plus"
                        title="listed"
                        :active="request()->is('seller/listed')"
                        routeName="listed"
                    />
                    @endcan @can("is-admin")
                    <x-side-bar-link
                        icon="fas fa-shipping-fast"
                        title="Live Auctions"
                        :active="request()->is('admin/live-auctions')"
                        routeName="running"
                    />
                    <x-side-bar-link
                        icon="fas fa-hourglass-half"
                        title="scheduled"
                        :active="request()->is('admin/schedule')"
                        routeName="schedules"
                    />

                    <x-side-bar-link
                        icon="fas fa-users"
                        title="Manage Sellers"
                        :active="request()->is('admin/sellers')"
                        routeName="all_sellers"
                    />
                    @endcan
                    <x-side-bar-link
                        icon="fas fa-user"
                        title="Profile"
                        :active="request()->is('app/profile')"
                        routeName="profile"
                    />

                    <x-side-bar-link
                        icon="fas fa-cogs"
                        title="settings"
                        :active="request()->is('app/settings')"
                        routeName="settings"
                    />
                </div>
                <div
                    class="transition-all hover:text-yellow-600 mt-auto flex space items-center text-lg text-white space-x-4"
                >
                    <i class="fas fa-sign-out-alt"></i>
                    <button
                        form="logOutForm"
                        type="submit"
                        class="text-white transition-all hover:text-yellow-600"
                    >
                        log out
                    </button>
                    <form
                        class="hidden"
                        id="logOutForm"
                        action="/logout"
                        method="post"
                    >
                        @csrf
                    </form>
                </div>
            </div>
        </section>
        <div class="flex flex-col w-full">
            <header class="border-0 border-b-2 py-2 px-8 h-12 w-full">
                <div
                    class="container mx-auto text-lg text-white flex justify-between"
                >
                    <span></span>
                    <div class="space-x-8 text-white">
                        <button class="transition-all hover:text-yellow-600">
                            <i class="fas fa-bell"></i>
                        </button>
                        <button
                            data-dropdown-toggle="auth_dropdown"
                            class="transition-all hover:text-yellow-600"
                        >
                            <i class="fas fa-user"></i>
                        </button>
                        <div
                            id="auth_dropdown"
                            class="z-10 hidden gradient2 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
                        >
                            <ul
                                class="py-2 text-sm"
                                aria-labelledby="dropdownDefaultButton"
                            >
                                <li>
                                    <a
                                        href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                        >Profile</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                        >Settings</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                        >Sign out</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <main class="flex-1 w-full overflow-y-scroll">
                <!-- All the main components will be sloted in here -->
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
