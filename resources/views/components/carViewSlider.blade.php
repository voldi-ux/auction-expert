@props(["car"]) 

@php $no_imgs = count($car->images); @endphp

<div
    id="animation-carousel"
    class="relative w-full h-full"
    data-carousel="slide"
>
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        @foreach($car->images as $img)
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div class="h-long w-full flex justify-center">
                <img
                    src="/storage/{{$img->path}}"
                    class="absolute block h-full mx-auto"
                    alt="..."
                />
            </div>
        </div>
        @endforeach
    </div>
    <!-- Slider indicators -->
    <div
        class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2"
    >
        @for ($i = 0; $i < $no_imgs; $i++)
        <button
            type="button"
            class="h-20 w-20"
            aria-current="true"
            aria-label="Slide 1"
            data-carousel-slide-to="{{$i}}"
        >
            <img src="/storage/{{$car->images[$i]->path}}" />
        </button>
        @endfor
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