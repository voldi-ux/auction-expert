@php
 $msg = "There’s currently no live auction. Please check back later.";
@endphp


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>auction expert</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
            rel="stylesheet"
        />

        <!-- Styles / Scripts -->
        @vite(['resources/js/app.js'])
    </head>
    <body class="font-sans myBg ">
        
        <!-- filter drawer -->
        <!-- <div
            id="filter-drawer"
            class="h-screen bg-white fixed  top-0 right-0 z-40  p-4 overflow-y-auto transition-transform translate-x-full  w-80 "
            tabindex="-1"
            aria-labelledby="drawer-right-label"
        >
            <h5
                id="drawer-right-label"
                class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"
            >
                Advanced Filtering
            </h5>
            <button
                type="button"
                data-drawer-hide="filter-drawer"
                aria-controls="filter-drawer"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white"
            >
                <svg
                    class="w-3 h-3"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 14 14"
                >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                    />
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
             <div>

             </div>
            </div> -->


            <x-drawer drawer_id="home-filter-drawer" title="Advanced Drawer" >
                <h1>
                    home filter drawer
                </h1>
            </x-drawer>

      
        <div class="flex flex-col">
            <nav class="flex text-white items-center justify-between px-10">
                <div class="w-40">
                    <img src="/storage/images/logo.png" />
                </div>

                <div class="space-x-4">
                   @guest
                       <a
                        class="text-lg hover:text-orange transition-all"
                        href="/login"
                        >Login</a
                    >
                    <a
                        class="text-lg hover:text-orange transition-all"
                        href="/register"
                        >Register</a
                    >
                   @endguest

                   @auth
                     <x-authDropdown />
                   @endauth
                </div>

                <div class="space-x-4">
                    <a
                        class=" text-lg hover:text-orange transition-all"
                        href="/"
                        >Home</a
                    >
                    <a
                        class="text-lg hover:text-orange transition-all"
                        href="/"
                        >Scheduled Auctions</a
                    >
                    <a
                        class="text-lg hover:text-orange transition-all"
                        href=""
                        >About</a
                    >
                    <a
                        class="text-lg hover:text-orange transition-all"
                        href=""
                        >Contact</a
                    >
                </div>
            </nav>
            <header
                class="mx-auto container pb-20 space-y-8 flex flex-col  w-full bg-[url('/storage/images/hero.png')] bg-center bg-contain bg-no-repeat"
            >
                 <x-searchBar placeholder="Search make, model, etc..."/>

                <div class="flex items-center space-x-4">
                    <h1 class="text-lg text-white">Car Condition</h1>
                    <div class="space-x-4">
                         <x-tag title="All"/>
                         <x-tag title="New"/>
                         <x-tag title="Used"/>
                         <x-tag title="Fair"/>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <h1 class="text-lg text-white">Sort Order</h1>
                    <div class="space-x-4">
                        <x-tag title="Newly listed first"/>
                        <x-tag title="Oldest first"/>
                    </div>
                </div>
            </header>
        </div>

        <section class="container mx-auto mb-20">
            <div class="mb-20 flex justify-between">
                <h1 class="text-3xl text-white font-semibold">Live Auctions</h1>
                <div class="space-x-2 text-lg text-white">
                     <button
                    class=""
                    data-drawer-target="home-filter-drawer"
                    data-drawer-show="home-filter-drawer"
                    data-drawer-placement="right"
                    aria-controls="home-filter-drawer  "
                >
                    <i class="fas fa-sort-amount-down-alt"></i>
                    <span> Filter </span>
                </button>
                </div>
            </div>
            <div class="flex flex-wrap gap-8 "> 
          @forelse ($live_auctions as $auction)
            <x-card.live  :auction="$auction"/>
            @empty
            <x-nothingToShow :msg="$msg" />
            @endforelse
            </div>
           
        </section>

        <section class="container mx-auto mb-20">
            <div class="flex justify-between mb-20">
                <h1 class="text-3xl text-white font-semibold">Scheduled Auctions</h1>
                <a class="text-lg text-orange" href="/scheduled-auctions">See All</a>
            </div>

            <div class="flex flex-wrap space-x-8">
           @forelse ($scheduled as $auction)
            <x-card.scheduled  :auction="$auction"/>
            @empty
            <x-nothingToShow :msg="$msg" />
            @endforelse
            </div>
        </section>
        <div class="gradient2">
            <footer class="container mx-auto flex flex-col items-center">
                <div><img src="/storage/images/logo.png" class="w-40" /></div>
                <div class="flex justify-between w-full">
                    <ul class="text-lg text-white space-y-4">
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>

                    <div class="text-lg text-white">
                        <h1>Follow us</h1>
                        <ul>
                            <li><a href="">Facebook</a></li>
                            <li><a href="">Instagram</a></li>
                            <li><a href=""> LinkedIn</a></li>
                        </ul>
                    </div>
                </div>
                <p class="text-lg text-orange-700">coypright &copy; 2024</p>
            </footer>
        </div>

    </body>
</html>
