@props(["data" => null])

<section class="flex-1">
    @if (session('message'))
    <x-toast :message="session('message')" />
    @endif

    <form
        action="/store-car"
        method="post"
        class="w-full min-h-long p-4 space-y-12 rounded-lg"
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
                name="name"
                placeholder="Name"
            />
            <x-input
                type="text"
                class="w-5/12"
                name="model"
                placeholder="Surname"
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
            <x-input
                type="text"
                class="w-5/12"
                name="condition"
                placeholder="Car condition"
            />
            <x-input
                type="text"
                class="w-5/12"
                name="color"
                placeholder="Color"
            />
        </div>
        <div class="flex space-x-4 justify-center">
            <x-input
                type="number"
                class="w-5/12"
                name="seats"
                placeholder="Number of seats"
            />
            <x-input
                type="number"
                class="w-5/12"
                name="doors"
                placeholder="Number of doors"
            />
        </div>

        <h1 class="text-xl font-semibold text-white text-center">
            Vehicle Performance
        </h1>

        <div class="flex space-x-4 justify-center">
            <x-input
                type="text"
                class="w-5/12"
                name="fuel_type"
                placeholder="Fuel Type"
            />
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
            <x-input
                type="text"
                class="w-5/12"
                name="drive"
                placeholder="Car drive"
            />

            <x-input
                type="text"
                class="w-5/12 invisible"
                name="drive"
                placeholder="Car drive"
            />
        </div>

        <h1 class="text-xl font-semibold text-white text-center">
            Reserved Price
        </h1>

        <div class="px-20">
            <x-input
                type="number"
                class="w-full block"
                placeholder="Reserved price"
            />
        </div>

        <h1 class="text-xl font-semibold text-white text-center">
            Car Description
        </h1>
        <textarea
            class="w-full h-40 bg-transparent"
            placeholder="Additional car Description"
        >
        </textarea>

     
        <h1 class="text-xl font-semibold text-white text-center">
            Uploaded Vehicle Documents
        </h1>
        <div
            class="space-y-4 text-blue-600 h-40 overflow-y-auto border-2 border-dashed border-neutral-600 flex flex-col justify-center items-center"
        >
            <a href="/storage/images/car1.png" target="_blank">id.pdf</a>
            <a href="/storage/images/car1.png" target="_blank">license.pdf</a>
            <a href="/storage/images/car1.png" target="_blank">license.pdf</a>
        </div>

        <div class="flex justify-center space-x-4">
            <button
                class="text-white gradient4 font-semibold text-lg capitalize p-2 min-w-40"
            >
                Update vehicle
            </button>
            <button
                class="text-white bg-red-500 font-semibold text-lg capitalize p-2 min-w-40"
            >
                Decline
            </button>
        </div>
    </form>
</section>
