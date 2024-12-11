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
                        class="text-lg hover:text-orange-500 transition-all"
                        href="/login"
                        >Login</a
                    >
                    <a
                        class="text-lg hover:text-orange-500 transition-all"
                        href="/register"
                        >Register</a
                    >
                   @endguest
            </div>

            <div class="space-x-4">
                <a class="text-lg hover:text-orange-500 transition-all" href=""
                    >About</a
                >
                <a class="text-lg hover:text-orange-500 transition-all" href=""
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
                            href="#"
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
                    <div
                        id="animation-carousel"
                        class="relative w-full h-full"
                        data-carousel="static"
                    >
                        <!-- Carousel wrapper -->
                        <div
                            class="relative h-56 overflow-hidden rounded-lg md:h-96"
                        >
                            <!-- Item 1 -->
                            <div
                                class="hidden duration-200 ease-linear"
                                data-carousel-item
                            >
                                <img
                                    src="/storage/images/car1.png"
                                    class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="..."
                                />
                            </div>
                            <!-- Item 2 -->
                            <div
                                class="hidden duration-200 ease-linear"
                                data-carousel-item
                            >
                                <img
                                    src="/storage/images/car3.png"
                                    class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="..."
                                />
                            </div>
                            <!-- Item 3 -->
                            <div
                                class="hidden duration-200 ease-linear"
                                data-carousel-item="active"
                            >
                                <img
                                    src="/storage/images/car2.png"
                                    class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="..."
                                />
                            </div>
                            <!-- Item 4 -->
                            <div
                                class="hidden duration-200 ease-linear"
                                data-carousel-item
                            >
                                <img
                                    src="/storage/images/car4.png"
                                    class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="..."
                                />
                            </div>
                            <!-- Item 5 -->
                            <div
                                class="hidden duration-200 ease-linear"
                                data-carousel-item
                            >
                                <img
                                    src="/storage/images/car5.png"
                                    class="absolute block h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="..."
                                />
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2"
                        >
                            <button
                                type="button"
                                class="h-20"
                                aria-current="true"
                                aria-label="Slide 1"
                                data-carousel-slide-to="0"
                            >
                                <img src="/storage/images/car2.png" />
                            </button>
                            <button
                                type="button"
                                class="h-20"
                                aria-current="false"
                                aria-label="Slide 2"
                                data-carousel-slide-to="1"
                            >
                                <img src="/storage/images/car2.png" />
                            </button>
                            <button
                                type="button"
                                class="h-20"
                                aria-current="false"
                                aria-label="Slide 3"
                                data-carousel-slide-to="2"
                            >
                                <img src="/storage/images/car2.png" />
                            </button>
                            <button
                                type="button"
                                class="h-20"
                                aria-current="false"
                                aria-label="Slide 4"
                                data-carousel-slide-to="3"
                            >
                                <img src="/storage/images/car2.png" />
                            </button>
                            <button
                                type="button"
                                class="h-20"
                                aria-current="false"
                                aria-label="Slide 5"
                                data-carousel-slide-to="4"
                            >
                                <img src="/storage/images/car2.png" />
                            </button>
                        </div>
                        <!-- Slider controls -->
                        <button
                            type="button"
                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev
                        >
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none"
                            >
                                <svg
                                    class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
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
                                        d="M5 1 1 5l4 4"
                                    />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button
                            type="button"
                            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next
                        >
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none"
                            >
                                <svg
                                    class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
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
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="w-80 h-min gradient2 p-4 space-y-8">
                    <div
                        class="flex px-2 justify-between border-b-2 border-white items-center pb-1"
                    >
                        <h1 class="tex-lg text-white font-semibold">
                            2020 Toyota v1
                        </h1>
                        <i class="fa fa-heart text-lg text-white"></i>
                    </div>

                    <div class="p-2 gradient3 text-center rounded-lg">
                        <h1 class="text-lg text-white">Top Bid</h1>
                        <h1 class="text-3xl text-white font-bold">
                            R 5000 000
                        </h1>
                    </div>

                    <div class="flex justify-between px-2 text-white">
                        <div class="text-center">
                            <h1 class="text-lg">Time remaining</h1>
                            <h1 class="text-sm">3h 20min 3s</h1>
                        </div>
                        <div class="text-center">
                            <h1 class="text-lg">Closing date</h1>
                            <h1 class="text-xs">Mon, 08, Dec, 10:00am</h1>
                        </div>
                    </div>

                    <div class="flex justify-between px-2">
                        <div>
                            <h1 class="text-white">Car Mileage</h1>
                        </div>

                        <h1 class="text-gray">400Km</h1>
                    </div>

                    <div class="flex justify-between px-2">
                        <div>
                            <h1 class="text-white">Fuel type</h1>
                        </div>

                        <h1 class="text-gray">Petrol</h1>
                    </div>
                    <div class="flex justify-between px-2">
                        <div>
                            <h1 class="text-white">Transmission</h1>
                        </div>

                        <h1 class="text-gray">Manual</h1>
                    </div>

                    <button
                        class="p-2 flex justify-center items-center w-full gradient4 rounded-lg text-lg text-white"
                    >
                        Login To Make Bids
                    </button>

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
                        <h1 class="text-gray">BMW</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Make</h1>
                        <h1 class="text-gray">BMW</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Make</h1>
                        <h1 class="text-gray">BMW</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Make</h1>
                        <h1 class="text-gray">BMW</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Make</h1>
                        <h1 class="text-gray">BMW</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Make</h1>
                        <h1 class="text-gray">BMW</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Make</h1>
                        <h1 class="text-gray">BMW</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Make</h1>
                        <h1 class="text-gray">BMW</h1>
                    </div>
                </div>
                <div class="w-1/2 p-4">
                    <h1 class="text-white font-bold text-2xl mb-8">
                        Vehicle Performance
                    </h1>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Make</h1>
                        <h1 class="text-gray">BMW</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Make</h1>
                        <h1 class="text-gray">BMW</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Make</h1>
                        <h1 class="text-gray">BMW</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Make</h1>
                        <h1 class="text-gray">BMW</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Make</h1>
                        <h1 class="text-gray">BMW</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Make</h1>
                        <h1 class="text-gray">BMW</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Make</h1>
                        <h1 class="text-gray">BMW</h1>
                    </div>
                    <div class="flex justify-between mb-2">
                        <h1 class="text-white">Make</h1>
                        <h1 class="text-gray">BMW</h1>
                    </div>
                </div>
            </div>
             <div class="flex">
                <div class="w-1/2">
                  <h1 class="text-white font-bold text-2xl mb-8">
                Car description
            </h1>
            <p class="text-white">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis magni delectus laudantium blanditiis officiis maxime dolore, ea dignissimos voluptate, culpa corrupti, doloremque mollitia quia quam error reiciendis temporibus voluptatum maiores?
            </p>
                </div>
                <div></div>
             </div>
        </section>

        <section class="container mx-auto mb-20">
            <div class="flex justify-between mb-20">
                <h1 class="text-3xl text-white font-semibold">Similar Cars</h1>
            </div>

            <div class="flex flex-wrap gap-8 justify-center">
               <x-card.live />
               <x-card.live />
               <x-card.live />
               <x-card.live />
               <x-card.live />
               <x-card.live />
               <x-card.live />
               <x-card.live />
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
