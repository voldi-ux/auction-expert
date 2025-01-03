<x-app-layout>
    <section class="p-8 h-full mb-20">
        @if (session('message'))
        <x-toast :message="session('message')" />
        @endif

        <form
            action="{{ route('post_car') }}"
            method="post"
            class="w-full min-h-long p-4 gradient2 space-y-12 rounded-lg"
            enctype="multipart/form-data"
        >
            @CSRF
            <h1 class="text-xl font-semibold text-white text-center">
                Vehicle Details
            </h1>
            <div class="flex space-x-4 justify-center">
                <x-input
                    type="text"
                    class="w-5/12"
                    name="make"
                    placeholder="make"
                />
                <x-input
                    type="text"
                    class="w-5/12"
                    name="model"
                    placeholder="Model"
                />
            </div>

            <div class="flex space-x-4 justify-center">
                <x-input
                    type="text"
                    class="w-5/12"
                    name="body_type"
                    placeholder="Body Type"
                />
                <x-input
                    type="number"
                    class="w-5/12"
                    name="year"
                    placeholder="Year"
                />
            </div>

            <div class="flex space-x-4 justify-center">
                <x-input
                    type="number"
                    class="w-5/12"
                    name="mileage"
                    placeholder="Mileage"
                />
                <x-input
                    type="number"
                    class="w-5/12"
                    name="code"
                    placeholder="Code"
                />
            </div>
            <div class="flex space-x-4 justify-center">
                <x-select name="condition" class="w-5/12">
                    <x-conditionsOptions />
                </x-select>

                <x-input
                    type="text"
                    class="w-5/12"
                    name="colour"
                    placeholder="colour"
                />
            </div>
            <div class="flex space-x-4 justify-center">
                <x-input
                    type="number"
                    class="w-5/12"
                    name="number_of_seats"
                    placeholder="Number of seats"
                />
                <x-input
                    type="number"
                    class="w-5/12"
                    name="number_of_doors"
                    placeholder="Number of doors"
                />
            </div>

            <h1 class="text-xl font-semibold text-white text-center">
                Vehicle Performance
            </h1>

            <div class="flex space-x-4 justify-center content-end">
                <x-select name="fuel_type" class="w-5/12">
                    <x-fuelTypeOptions />
                </x-select>

                <x-input
                    type="number"
                    class="w-5/12"
                    name="tank_capacity"
                    placeholder="Fuel tank capacity"
                />
            </div>

            <div class="flex space-x-4 justify-center">
                <x-input
                    type="text"
                    class="w-5/12"
                    name="fuel_consumption"
                    placeholder="Fuel consumption"
                />
                <x-input
                    type="number"
                    class="w-5/12"
                    name="engine_capacity"
                    placeholder="Engine Capacity"
                />
            </div>

            <div class="flex space-x-4 justify-center">
                <x-input
                    type="number"
                    class="w-5/12"
                    name="cylinder_layout"
                    placeholder="Cylinder Layout"
                />
                <x-input
                    type="number"
                    class="w-5/12"
                    name="gears"
                    placeholder="Gears"
                />
            </div>

            <div class="flex space-x-4 justify-center">
                <x-select name="drive" class="w-5/12">
                    <x-driveTypeOptions />
                </x-select>

                <x-input
                    type="text"
                    class="w-5/12"
                    name="transmission"
                    placeholder="transmission"
                />
            </div>

            <h1 class="text-xl font-semibold text-white text-center">
                Reserved Price
            </h1>

            <div class="px-20">
                <x-input
                    name="reserved_price"
                    type="number"
                    class="w-full block"
                    placeholder="Reserved price"
                />
            </div>

            <h1 class="text-xl font-semibold text-white text-center">
                Car Description
            </h1>
            <textarea
                name="description"
                value="description"
                class="w-full h-40 bg-transparent text-white"
                placeholder="Additional car description"
            ></textarea>

            <h1 class="text-xl font-semibold text-white text-center">
                Upload Vehicle Images
            </h1>
            <div
                class="h-40 border-2 border-dashed border-neutral-600 flex justify-center items-center"
            >
                <input
                    type="file"
                    name="images[]"
                    multiple
                    accept="image/*"
                    placeholder="click here to add image drop an image"
                />
            </div>

            <h1 class="text-xl font-semibold text-white text-center">
                Upload Vehicle Documents
            </h1>
            <div
                class="h-40 border-2 border-dashed border-neutral-600 flex justify-center items-center"
            >
                <input
                    type="file"
                    name="docs[]"
                    multiple
                    accept="image/*"
                    placeholder="click here to add documents drop them here"
                />
            </div>

            <button
                class="mx-auto text-white gradient4 font-semibold text-lg capitalize block p-2 min-w-40"
            >
                upload vehicle
            </button>
        </form>
    </section>
</x-app-layout>
