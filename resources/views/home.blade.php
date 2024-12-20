@php $msg = "There’s currently no live auction. Please check back later.";
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
    <body class="font-sans myBg">
        <x-drawer drawer_id="home-filter-drawer" title="Advanced Drawer">
             <form action="/" class="h-full">
                 <x-advancedSearch />
             </form>
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
                    @endguest @auth
                    <x-authDropdown />
                    @endauth
                </div>

                <div class="space-x-4">
                    <a class="text-lg hover:text-orange transition-all" href="/"
                        >Home</a
                    >
                    <a class="text-lg hover:text-orange transition-all" href="/"
                        >Scheduled Auctions</a
                    >
                    <a class="text-lg hover:text-orange transition-all" href=""
                        >About</a
                    >
                    <a class="text-lg hover:text-orange transition-all" href=""
                        >Contact</a
                    >
                </div>
            </nav>
            <header
                class="mx-auto container pb-20 space-y-8 flex flex-col w-full bg-[url('/storage/images/hero.png')]  bg-center bg-contain bg-no-repeat"
            >
              <x-searchBar.main ></x-searchBar.main>
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
            <div class="flex flex-wrap gap-8">
                @forelse ($live_auctions as $auction)
                <x-card.live :auction="$auction" />
                @empty
                <x-nothingToShow :msg="$msg" />
                @endforelse
            </div>

            <div class="flex justify-center my-8">
                {{$live_auctions->links()}}
            </div>
        </section>

        <section class="container mx-auto mb-20">
            <div class="flex justify-between mb-20">
                <h1 class="text-3xl text-white font-semibold">
                    Upcoming Auctions
                </h1>
                <a class="text-lg text-orange" href="/scheduled-auctions"
                    >See All</a
                >
            </div>

            <div class="flex flex-wrap gap-8">
                @forelse ($scheduled as $auction)
                <x-card.scheduled :auction="$auction" />
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
