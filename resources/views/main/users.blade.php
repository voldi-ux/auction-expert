 @if (session('message'))
        <x-toast :message="session('message')" />
@endif

<x-app-layout>
    <x-drawer drawer_id="sellers-filter-drawer" title="Filter Sellers">
        <h1>Filter sellers</h1>
    </x-drawer>

    <x-modal modal_id="create-seller" title="Add New Seller">
        <div>
            <x-createSeller />
         
        </div>
        
    </x-modal>

    <header class="py-2 px-8 space-y-4">
        <div class="flex justify-between">
            <span></span>
            <div class="text-white space-x-4">
                <button
                    class="border-2 p-1 border-gray"
                    data-drawer-target="sellers-filter-drawer"
                    data-drawer-show="sellers-filter-drawer"
                    data-drawer-placement="right"
                    aria-controls="sellers-filter-drawer  "
                >
                    <i class="fas fa-sort-amount-down-alt"></i>
                    <span> Filter </span>
                </button>

                <button
                    class="border-2 p-1 border-gray"
                    data-modal-target="create-seller"
                    data-modal-toggle="create-seller"
                    aria-controls="filter-drawer  "
                >
                    <i class="fas fa-plus"></i>
                    <span> Add new Seller </span>
                </button>
            </div>
        </div>

          <x-searchBar placeholder="Search name, email, etc..."/>
    </header>
    <section class="min-h-96 m-8  p-4 flex flex-col rounded-lg gradient2">
        <div class="relative overflow-x-auto flex-1 ">
            <table class="w-full text-sm text-left rtl:text-right">
                <thead class="text-white uppercase">
                    <tr>
                        <th scope="col" class="px-6 py-3">Details</th>
                        <th scope="col" class="px-6 py-3">Created Date</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-0 text-white">
                        <th
                            scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white"
                        >
                            <div class="ps-3">
                                <div class="text-base font-semibold">
                                    Neil Sims
                                </div>
                                <div class="font-normal text-gray-500">
                                    neil.sims@flowbite.com
                                </div>
                            </div>
                        </th>
                        <td class="px-6 py-4">2020/11/40</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div
                                    class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"
                                ></div>
                                active
                            </div>
                        </td>
                        <td class="px-6 py-4 space-x-4">
                            <a
                                href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                >Edit Seller</a
                            >
                            <a
                                href="#"
                                class="font-medium text-white p-2 bg-red-600 "
                                >Delete  </a
                            >
                        </td>
                    </tr>
                    <tr class="border-0 text-white">
                        <th
                            scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white"
                        >
                            <div class="ps-3">
                                <div class="text-base font-semibold">
                                    Neil Sims
                                </div>
                                <div class="font-normal text-gray-500">
                                    neil.sims@flowbite.com
                                </div>
                            </div>
                        </th>
                        <td class="px-6 py-4">2020/11/40</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div
                                    class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"
                                ></div>
                                active
                            </div>
                        </td>
                        <td class="px-6 py-4 space-x-4">
                            <a
                                href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                >Edit Seller</a
                            >
                            <a
                                href="#"
                                class="font-medium text-white p-2 bg-red-600 "
                                >Delete  </a
                            >
                        </td>
                    </tr>
                    <tr class="border-0 text-white">
                        <th
                            scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white"
                        >
                            <div class="ps-3">
                                <div class="text-base font-semibold">
                                    Neil Sims
                                </div>
                                <div class="font-normal text-gray-500">
                                    neil.sims@flowbite.com
                                </div>
                            </div>
                        </th>
                        <td class="px-6 py-4">2020/11/40</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div
                                    class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"
                                ></div>
                                active
                            </div>
                        </td>
                        <td class="px-6 py-4 space-x-4">
                            <a
                                href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                >Edit Seller</a
                            >
                            <a
                                href="#"
                                class="font-medium text-white p-2 bg-red-600 "
                                >Delete  </a
                            >
                        </td>
                    </tr>
                    <tr class="border-0 text-white">
                        <th
                            scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white"
                        >
                            <div class="ps-3">
                                <div class="text-base font-semibold">
                                    Neil Sims
                                </div>
                                <div class="font-normal text-gray-500">
                                    neil.sims@flowbite.com
                                </div>
                            </div>
                        </th>
                        <td class="px-6 py-4">2020/11/40</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div
                                    class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"
                                ></div>
                                active
                            </div>
                        </td>
                        <td class="px-6 py-4 space-x-4">
                            <a
                                href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                >Edit Seller</a
                            >
                            <a
                                href="#"
                                class="font-medium text-white p-2 bg-red-600 "
                                >Delete  </a
                            >
                        </td>
                    </tr>
                    <tr class="border-0 text-white">
                        <th
                            scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white"
                        >
                            <div class="ps-3">
                                <div class="text-base font-semibold">
                                    Neil Sims
                                </div>
                                <div class="font-normal text-gray-500">
                                    neil.sims@flowbite.com
                                </div>
                            </div>
                        </th>
                        <td class="px-6 py-4">2020/11/40</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div
                                    class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"
                                ></div>
                                suspended
                            </div>
                        </td>
                        <td class="px-6 py-4 space-x-4">
                            <a
                                href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                >Edit Seller</a
                            >
                            <a
                                href="#"
                                class="font-medium text-white p-2 bg-red-600 "
                                >Delete  </a
                            >
                        </td>
                    </tr>
                </tbody>
            </table>
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
