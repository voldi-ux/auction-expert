<section class="p-4">
    <form action="" class="w-full p-4 gradient2 space-y-12 rounded-lg">
        <div class="flex flex w-full space-x-4 text-lg text-white">
            <div class="space-y-8 flex flex-col md:w-1/2">
                <x-input type="text" name="carModel" placeholder="Car Model" />
                <x-input
                    type="text"
                    name="carModel"
                    placeholder="Car Body Type"
                />
            </div>
            <div class="space-y-8 flex flex-col md:w-1/2">
                <x-input type="text" name="brand" placeholder="Car Brand" />
                <x-input type="text" name="year" placeholder="Year made" />
            </div>
        </div>
        <button
            class="mx-auto bg-orange-500 w-20 font-semibold text-white text-lg capitalize block"
        >
            Search
        </button>
    </form>
</section>
