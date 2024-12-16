@php $msg = "No similar auction"; @endphp

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
                <a class="text-lg hover:text-orange transition-all" href=""
                    >About</a
                >
                <a class="text-lg hover:text-orange transition-all" href=""
                    >Contact</a
                >
            </div>
        </nav>

        <section class="container mx-auto mb-20">
            <nav class="flex text-lg text-white mb-20" aria-label="Breadcrumb">
                <ol
                    class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse"
                >
                    <li class="inline-flex items-center">
                        <a
                            href="/"
                            class="inline-flex items-center font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white"
                        >
                            <svg
                                class="w-3 h-3 me-2.5"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"
                                />
                            </svg>
                            Home
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg
                                class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 6 10"
                            >
                                <path
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m1 9 4-4-4-4"
                                />
                            </svg>
                            <span
                                class="ms-1 font-medium text-gray-500 md:ms-2 dark:text-gray-400"
                                >Auction View</span
                            >
                        </div>
                    </li>
                </ol>
            </nav>

            <div class="flex">
                <div class="flex-1 mr-8 h-long gradient2">
                    <x-carViewSlider :car="$auction->car" />
                </div>
                <div class="w-80 h-min gradient2 p-4 space-y-8">
                    <div
                        class="flex px-2 border-b-2 border-white items-center pb-1"
                    >
                        <h1 class="tex-lg text-white font-semibold">
                            {{$auction->car->make}}
                            {{$auction->car->model}}
                        </h1>
                    </div>

                    <div class="p-2 gradient3 text-center rounded-lg">
                        @if($auction->status == "scheduled")
                        <h1 class="text-3xl text-white font-semibold py-4">
                            Starts Soon
                        </h1>
                        @else
                        <h1 class="text-lg text-white">Top Bid</h1>
                        @if($auction->getTopBid() > 0)
                        <h1 class="text-3xl text-white font-bold">
                            R {{number_format($auction->getTopBid())}}
                        </h1>
                        @else
                        <h1 class="text-3xl text-white font-bold">NO BIDS</h1>
                        @endif @endif
                    </div>

                    <div
                        class="flex justify-between px-2 text-white items-center"
                    >
                        <div class="text-center">
                            <h1 class="text-lg">Time remaining</h1>
                            <h1 class="text-sm">
                                {{$auction->remainingTimeFormated()}}
                            </h1>
                        </div>
                        <div class="text-center">
                            <h1 class="text-lg">Closing date</h1>
                            <h1 class="text-xs">
                                {{$auction->formatedEndtime()}}
                            </h1>
                        </div>
                    </div>

                    <div class="flex justify-between px-2">
                        <div>
                            <h1 class="text-white">Car Mileage</h1>
                        </div>

                        <h1 class="text-gray">{{$auction->car->mileage}}Km</h1>
                    </div>

                    <div class="flex justify-between px-2">
                        <div>
                            <h1 class="text-white">Fuel type</h1>
                        </div>

                        <h1 class="text-gray">{{$auction->car->fuel_type}}</h1>
                    </div>
                    <div class="flex justify-between px-2">
                        <div>
                            <h1 class="text-white">Transmission</h1>
                        </div>

                        <h1 class="text-gray">
                            {{$auction->car->transmission}}
                        </h1>
                    </div>

                    <div class="flex justify-between px-2">
                        <div>
                            <h1 class="text-white">Starting Bid Amount</h1>
                        </div>

                        <h1 class="text-gray">
                            R {{number_format($auction->start_bid_amount)}}
                        </h1>
                    </div>

                    <!-- To do
                      A seller should not see this, only  
                     
                     -->

                    @guest
                    <button
                        id="bid-btn"
                        class="p-2 flex justify-center items-center w-full bg-dark1 rounded-lg text-lg text-white"
                    >
                        Login To Make Bids
                    </button>
                    @endguest @auth @can("is-buyer") @csrf
                    <button
                        data-drawer-target="drawer-payment-type"
                        data-drawer-show="drawer-payment-type"
                        data-drawer-placement="bottom"
                        aria-controls="drawer-payment-type"
                        class="p-2 flex justify-center items-center w-full gradient4 rounded-lg text-lg text-white"
                    >
                        Place A Bid
                    </button>

                    <x-paymentType :auction="$auction" />

                    @endcan @endauth

                    <x-accordion />
                </div>
            </div>
        </section>

        <section class="container gradient2 mx-auto p-4 mb-20">
            <h1 class="text-white font-bold text-3xl text-center mb-20 mt-8">
                Vehicle Specifications
            </h1>

            <div class="flex">
                <div class="w-1/2 p-4">
                    <h1 class="text-white font-bold text-2xl mb-8">
                        Vehicle Details
                    </h1>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Make</h1>
                        <h1 class="text-gray">{{$auction->car->make}}</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Model</h1>
                        <h1 class="text-gray">{{$auction->car->model}}</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Body Type</h1>
                        <h1 class="text-gray">{{$auction->car->body_type}}</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Year Made</h1>
                        <h1 class="text-gray">{{$auction->car->year}}</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Mileage</h1>
                        <h1 class="text-gray">{{$auction->car->mileage}}</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Code</h1>
                        <h1 class="text-gray">{{$auction->car->code}}</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Car Condition</h1>
                        <h1 class="text-gray">{{$auction->car->condition}}</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Colour</h1>
                        <h1 class="text-gray">{{$auction->car->Colour}}</h1>
                    </div>

                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Number Of Seats</h1>
                        <h1 class="text-gray">
                            {{$auction->car->number_of_seats}}
                        </h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Number Of Doors</h1>
                        <h1 class="text-gray">
                            {{$auction->car->number_of_doors}}
                        </h1>
                    </div>
                </div>
                <div class="w-1/2 p-4">
                    <h1 class="text-white font-bold text-2xl mb-8">
                        Vehicle Performance
                    </h1>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Fuel Type</h1>
                        <h1 class="text-gray">{{$auction->car->fuel_type}}</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Fuel Tank Capacity</h1>
                        <h1 class="text-gray">
                            {{$auction->car->tank_capacity}}
                        </h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Fuel Consumption</h1>
                        <h1 class="text-gray">
                            {{$auction->car->fuel_consumption}}
                        </h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Engine Capacity</h1>
                        <h1 class="text-gray">
                            {{$auction->car->engine_capacity}}
                        </h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Cylinder Layout</h1>
                        <h1 class="text-gray">
                            {{$auction->car->cylinder_layout}}
                        </h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Gears</h1>
                        <h1 class="text-gray">{{$auction->car->gears}}</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Drive Type</h1>
                        <h1 class="text-gray">{{$auction->car->drive}}</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Car Transmission</h1>
                        <h1 class="text-gray">
                            {{$auction->car->transmission}}
                        </h1>
                    </div>
                </div>
            </div>
            <div class="flex">
                <div class="w-1/2">
                    <h1 class="text-white font-bold text-2xl mb-8 text-center">
                        Car Description
                    </h1>
                    <p class="text-white">
                        {{$auction->car->description}}
                    </p>
                </div>
                <div></div>
            </div>
        </section>

        <section class="container mx-auto mb-20">
            <div class="flex justify-between mb-20">
                <h1 class="text-3xl text-white font-semibold">Similar Cars</h1>
            </div>

            <div class="flex flex-wrap gap-8">
                @forelse ($similar as $auction)
                <x-card.live :auction="$auction" />
                @empty
                <x-nothingToShow :msg="$msg" />
                @endforelse
            </div>
        </section>
        <div class="gradient2 text-white">
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
                <p class="text-lg text-orange">coypright &copy; 2024</p>
            </footer>
        </div>

        <script>
            let ele = document.getElementById("bid-btn");

            ele.addEventListener("click", function () {
                //    <!--
                //        To do
                //        1) make an http request to  check if the buyer is already particiapting in the current auction
                //        2) if two, holds then we redirect to their auctions page
                //      -->
            });
        </script>
    </body>
</html>
