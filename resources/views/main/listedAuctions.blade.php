<x-app-layout>
    <x-drawer drawer_id="listed-filter-drawer" title="Advanced Filtering" />
    <header
        class="mx-auto container pb-20 space-y-8 flex flex-col w-full bg-[url('/storage/images/hero.png')] bg-center bg-contain bg-no-repeat p-8"
    >
        <x-searchBar placeholder="Search make, model, etc..."/>
        
        <div class="flex items-center space-x-4">
            <h1 class="text-lg text-white">Filter</h1>
            <div class="space-x-4 flex-1">
                <button
                    class="p-2 min-w-40 text-lg text-white gradient2 rounded-lg"
                >
                    declined
                </button>
                <button
                    class="p-2 min-w-40 text-lg text-white gradient2 rounded-lg"
                >
                    live
                </button>

                <button
                    class="p-2 min-w-40 text-lg text-white gradient2 rounded-lg"
                >
                    scheduled
                </button>

                <button
                    class="p-2 min-w-40 text-lg text-white gradient2 rounded-lg"
                >
                    completed
                </button>
            </div>
            <span>
                <button
                    class="border-2 p-1 border-gray text-white"
                    data-drawer-target="listed-filter-drawer"
                    data-drawer-show="listed-filter-drawer"
                    data-drawer-placement="right"
                    aria-controls="listed-filter-drawer  "
                >
                    <i class="fas fa-sort-amount-down-alt"></i>
                    <span> Filter </span>
                </button>
            </span>
        </div>
    </header>
    <section class="p-8">
        <h1 class="text-3xl text-white mb-20">Listed Vehicles</h1>
        <div class="flex flex-wrap gap-8 justify-center">
            <x-card.listed />
            <x-card.listed />
            <x-card.listed />
            <x-card.listed />
            <x-card.listed />
            <x-card.listed />
            <x-card.listed />
            <x-card.listed />
            <x-card.listed />
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
