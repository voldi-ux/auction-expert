<x-app-layout>
    <x-drawer drawer_id="live-auction-filter-drawer" title="Advanced Filtering" />
    <header
        class="mx-auto container pb-20 space-y-8 flex flex-col w-full bg-[url('/storage/images/hero.png')] bg-center bg-contain bg-no-repeat p-8"
    >
         <x-searchBar placeholder="Search make, model, etc..."/>
         
        <div class="flex items-center space-x-4">
            <h1 class="text-lg text-white">Sort Order</h1>
            <div class="space-x-4 flex-1">
                <button
                    class="p-2 min-w-40 text-lg text-white gradient2 rounded-lg"
                >
                    Newly listed first
                </button>
                <button
                    class="p-2 min-w-40 text-lg text-white gradient2 rounded-lg"
                >
                    Oldest first
                </button>
            </div>
            <span>
                <button
                    class="border-2 p-1 border-gray text-white"
                    data-drawer-target="live-auction-filter-drawer"
                    data-drawer-show="live-auction-filter-drawer"
                    data-drawer-placement="right"
                    aria-controls="live-auction-filter-drawer  "
                >
                    <i class="fas fa-sort-amount-down-alt"></i>
                    <span> Filter </span>
                </button>
            </span>
        </div>
    </header>
    <section class="p-8">
        <h1 class="text-3xl text-white mb-20">Live Auction</h1>
        <div class="flex flex-wrap gap-8">
            <div class="w-80 min-h-90 gradient2 rounded-lg space-y-8 pb-2">
                <div class="bg-white rounded-lg">
                    <!-- make the image clickable to go the next view of the auction -->
                    <a href="/auction/id">
                        <img src="/storage/images/car1.png" />
                    </a>
                </div>

                <div class="px-2">
                    <h1 class="tex-lg text-white font-semibold text-center">
                        2020 Toyota v1
                    </h1>
                </div>
                <div class="flex flex-col px-2 items-center justify-center">
                    <h1 class="text-white">Top Bid</h1>
                    <h1 class="font-semibold text-orange">R 4000 000</h1>
                </div>
                <div class="flex justify-between px-2 text-white">
                    <div class="text-center">
                        <h1 class="text-sm">Time remaining</h1>
                        <h1 class="text-sm">3h 20min 3s</h1>
                    </div>
                    <div class="text-center">
                        <h1 class="text-sm">Closing date</h1>
                        <h1 class="text-xs">Mon, 08, Dec, 10:00am</h1>
                    </div>
                </div>
                <div class="px-2">
                    <button
                        class="gradient3 text-center p-2 text-lg w-full text-white font-bold"
                    >
                        Manage Auction
                    </button>
                </div>
            </div>
            <div class="w-80 min-h-90 gradient2 rounded-lg space-y-8 pb-2">
                <div class="bg-white rounded-lg">
                    <!-- make the image clickable to go the next view of the auction -->
                    <a href="/auction/id">
                        <img src="/storage/images/car1.png" />
                    </a>
                </div>

                <div class="px-2">
                    <h1 class="tex-lg text-white font-semibold text-center">
                        2020 Toyota v1
                    </h1>
                </div>
                <div class="flex flex-col px-2 items-center justify-center">
                    <h1 class="text-white">Top Bid</h1>
                    <h1 class="font-semibold text-orange">R 4000 000</h1>
                </div>
                <div class="flex justify-between px-2 text-white">
                    <div class="text-center">
                        <h1 class="text-sm">Time remaining</h1>
                        <h1 class="text-sm">3h 20min 3s</h1>
                    </div>
                    <div class="text-center">
                        <h1 class="text-sm">Closing date</h1>
                        <h1 class="text-xs">Mon, 08, Dec, 10:00am</h1>
                    </div>
                </div>
                <div class="px-2">
                    <button
                        class="gradient3 text-center p-2 text-lg w-full text-white font-bold"
                    >
                        Manage Auction
                    </button>
                </div>
            </div>
            <div class="w-80 min-h-90 gradient2 rounded-lg space-y-8 pb-2">
                <div class="bg-white rounded-lg">
                    <!-- make the image clickable to go the next view of the auction -->
                    <a href="/auction/id">
                        <img src="/storage/images/car1.png" />
                    </a>
                </div>

                <div class="px-2">
                    <h1 class="tex-lg text-white font-semibold text-center">
                        2020 Toyota v1
                    </h1>
                </div>
                <div class="flex flex-col px-2 items-center justify-center">
                    <h1 class="text-white">Top Bid</h1>
                    <h1 class="font-semibold text-orange">R 4000 000</h1>
                </div>
                <div class="flex justify-between px-2 text-white">
                    <div class="text-center">
                        <h1 class="text-sm">Time remaining</h1>
                        <h1 class="text-sm">3h 20min 3s</h1>
                    </div>
                    <div class="text-center">
                        <h1 class="text-sm">Closing date</h1>
                        <h1 class="text-xs">Mon, 08, Dec, 10:00am</h1>
                    </div>
                </div>
                <div class="px-2">
                    <button
                        class="gradient3 text-center p-2 text-lg w-full text-white font-bold"
                    >
                        Manage Auction
                    </button>
                </div>
            </div>
            <div class="w-80 min-h-90 gradient2 rounded-lg space-y-8 pb-2">
                <div class="bg-white rounded-lg">
                    <!-- make the image clickable to go the next view of the auction -->
                    <a href="/auction/id">
                        <img src="/storage/images/car1.png" />
                    </a>
                </div>

                <div class="px-2">
                    <h1 class="tex-lg text-white font-semibold text-center">
                        2020 Toyota v1
                    </h1>
                </div>
                <div class="flex flex-col px-2 items-center justify-center">
                    <h1 class="text-white">Top Bid</h1>
                    <h1 class="font-semibold text-orange">R 4000 000</h1>
                </div>
                <div class="flex justify-between px-2 text-white">
                    <div class="text-center">
                        <h1 class="text-sm">Time remaining</h1>
                        <h1 class="text-sm">3h 20min 3s</h1>
                    </div>
                    <div class="text-center">
                        <h1 class="text-sm">Closing date</h1>
                        <h1 class="text-xs">Mon, 08, Dec, 10:00am</h1>
                    </div>
                </div>
                <div class="px-2">
                    <button
                        class="gradient3 text-center p-2 text-lg w-full text-white font-bold"
                    >
                        Manage Auction
                    </button>
                </div>
            </div>
            <div class="w-80 min-h-90 gradient2 rounded-lg space-y-8 pb-2">
                <div class="bg-white rounded-lg">
                    <!-- make the image clickable to go the next view of the auction -->
                    <a href="/auction/id">
                        <img src="/storage/images/car1.png" />
                    </a>
                </div>

                <div class="px-2">
                    <h1 class="tex-lg text-white font-semibold text-center">
                        2020 Toyota v1
                    </h1>
                </div>
                <div class="flex flex-col px-2 items-center justify-center">
                    <h1 class="text-white">Top Bid</h1>
                    <h1 class="font-semibold text-orange">R 4000 000</h1>
                </div>
                <div class="flex justify-between px-2 text-white">
                    <div class="text-center">
                        <h1 class="text-sm">Time remaining</h1>
                        <h1 class="text-sm">3h 20min 3s</h1>
                    </div>
                    <div class="text-center">
                        <h1 class="text-sm">Closing date</h1>
                        <h1 class="text-xs">Mon, 08, Dec, 10:00am</h1>
                    </div>
                </div>
                <div class="px-2">
                    <button
                        class="gradient3 text-center p-2 text-lg w-full text-white font-bold"
                    >
                        Manage Auction
                    </button>
                </div>
            </div>
            <div class="w-80 min-h-90 gradient2 rounded-lg space-y-8 pb-2">
                <div class="bg-white rounded-lg">
                    <!-- make the image clickable to go the next view of the auction -->
                    <a href="/auction/id">
                        <img src="/storage/images/car1.png" />
                    </a>
                </div>

                <div class="px-2">
                    <h1 class="tex-lg text-white font-semibold text-center">
                        2020 Toyota v1
                    </h1>
                </div>
                <div class="flex flex-col px-2 items-center justify-center">
                    <h1 class="text-white">Top Bid</h1>
                    <h1 class="font-semibold text-orange">R 4000 000</h1>
                </div>
                <div class="flex justify-between px-2 text-white">
                    <div class="text-center">
                        <h1 class="text-sm">Time remaining</h1>
                        <h1 class="text-sm">3h 20min 3s</h1>
                    </div>
                    <div class="text-center">
                        <h1 class="text-sm">Closing date</h1>
                        <h1 class="text-xs">Mon, 08, Dec, 10:00am</h1>
                    </div>
                </div>
                <div class="px-2">
                    <button
                        class="gradient3 text-center p-2 text-lg w-full text-white font-bold"
                    >
                        Manage Auction
                    </button>
                </div>
            </div>
            <div class="w-80 min-h-90 gradient2 rounded-lg space-y-8 pb-2">
                <div class="bg-white rounded-lg">
                    <!-- make the image clickable to go the next view of the auction -->
                    <a href="/auction/id">
                        <img src="/storage/images/car1.png" />
                    </a>
                </div>

                <div class="px-2">
                    <h1 class="tex-lg text-white font-semibold text-center">
                        2020 Toyota v1
                    </h1>
                </div>
                <div class="flex flex-col px-2 items-center justify-center">
                    <h1 class="text-white">Top Bid</h1>
                    <h1 class="font-semibold text-orange">R 4000 000</h1>
                </div>
                <div class="flex justify-between px-2 text-white">
                    <div class="text-center">
                        <h1 class="text-sm">Time remaining</h1>
                        <h1 class="text-sm">3h 20min 3s</h1>
                    </div>
                    <div class="text-center">
                        <h1 class="text-sm">Closing date</h1>
                        <h1 class="text-xs">Mon, 08, Dec, 10:00am</h1>
                    </div>
                </div>
                <div class="px-2">
                    <button
                        class="gradient3 text-center p-2 text-lg w-full text-white font-bold"
                    >
                        Manage Auction
                    </button>
                </div>
            </div>
            <div class="w-80 min-h-90 gradient2 rounded-lg space-y-8 pb-2">
                <div class="bg-white rounded-lg">
                    <!-- make the image clickable to go the next view of the auction -->
                    <a href="/auction/id">
                        <img src="/storage/images/car1.png" />
                    </a>
                </div>

                <div class="px-2">
                    <h1 class="tex-lg text-white font-semibold text-center">
                        2020 Toyota v1
                    </h1>
                </div>
                <div class="flex flex-col px-2 items-center justify-center">
                    <h1 class="text-white">Top Bid</h1>
                    <h1 class="font-semibold text-orange">R 4000 000</h1>
                </div>
                <div class="flex justify-between px-2 text-white">
                    <div class="text-center">
                        <h1 class="text-sm">Time remaining</h1>
                        <h1 class="text-sm">3h 20min 3s</h1>
                    </div>
                    <div class="text-center">
                        <h1 class="text-sm">Closing date</h1>
                        <h1 class="text-xs">Mon, 08, Dec, 10:00am</h1>
                    </div>
                </div>
                <div class="px-2">
                    <button
                        class="gradient3 text-center p-2 text-lg w-full text-white font-bold"
                    >
                        Manage Auction
                    </button>
                </div>
            </div>
            <div class="w-80 min-h-90 gradient2 rounded-lg space-y-8 pb-2">
                <div class="bg-white rounded-lg">
                    <!-- make the image clickable to go the next view of the auction -->
                    <a href="/auction/id">
                        <img src="/storage/images/car1.png" />
                    </a>
                </div>

                <div class="px-2">
                    <h1 class="tex-lg text-white font-semibold text-center">
                        2020 Toyota v1
                    </h1>
                </div>
                <div class="flex flex-col px-2 items-center justify-center">
                    <h1 class="text-white">Top Bid</h1>
                    <h1 class="font-semibold text-orange">R 4000 000</h1>
                </div>
                <div class="flex justify-between px-2 text-white">
                    <div class="text-center">
                        <h1 class="text-sm">Time remaining</h1>
                        <h1 class="text-sm">3h 20min 3s</h1>
                    </div>
                    <div class="text-center">
                        <h1 class="text-sm">Closing date</h1>
                        <h1 class="text-xs">Mon, 08, Dec, 10:00am</h1>
                    </div>
                </div>
                <div class="px-2">
                    <button
                        class="gradient3 text-center p-2 text-lg w-full text-white font-bold"
                    >
                        Manage Auction
                    </button>
                </div>
            </div>
        </div>
         <div class="flex mx-auto w-min my-12">
                <!-- Previous Button -->
                <a
                    href="#"
                    class="flex items-center justify-center px-4 h-10 me-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                >
                    <svg
                        class="w-3.5 h-3.5 me-2 rtl:rotate-180"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 14 10"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M13 5H1m0 0 4 4M1 5l4-4"
                        />
                    </svg>
                    Previous
                </a>
                <a
                    href="#"
                    class="flex items-center justify-center px-4 h-10 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                >
                    Next
                    <svg
                        class="w-3.5 h-3.5 ms-2 rtl:rotate-180"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 14 10"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9"
                        />
                    </svg>
                </a>
            </div>
    </section>
</x-app-layout>
