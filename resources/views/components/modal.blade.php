@props(["modal_id", "title" => " "])

<!-- Main modal -->
<div
    id="{{ $modal_id }}"
    tabindex="-1"
    aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center bg-blackLight w-full md:inset-0 h-[calc(100%-1rem)] max-h-full p-4"
>
    <div class="relative p-4 w-4/5 gradient2 h-full overflow-y-auto">
        <!-- Modal content -->
        <div class="relative">
            <!-- Modal header -->
            <div class="flex items-center justify-between border-b">
                <h3 class="text-xl font-semibold text-white">
                    {{ $title }}
                </h3>
                <button
                    type="button"
                    class="end-2.5 text-white bg-transparent hover:bg-gray-200 text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="{{ $modal_id }}"
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
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
