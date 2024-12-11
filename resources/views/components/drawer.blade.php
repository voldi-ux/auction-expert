@props(["drawer_id", "title" => ""])

        <div
            id="{{$drawer_id}}"
            class="h-screen bg-white fixed  top-0 right-0 z-40  p-4 overflow-y-auto transition-transform translate-x-full  w-80 "
            tabindex="-1"
            aria-labelledby="drawer-right-label"
        >
            <h5
                id="drawer-right-label"
                class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"
            >
                {{$title}}
            </h5>
            <button
                type="button"
                data-drawer-hide="{{$drawer_id}}"
                aria-controls="{{$drawer_id}}"
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
                <!-- drawer content -->
                  {{$slot}}
             </div>
            </div>