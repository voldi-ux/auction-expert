@props(["car"])

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
                value="{{$car->make}}"
                type="text"
                class="w-5/12"
                name="make"
                placeholder="make"
            />
            <x-input
                value="{{$car->model}}"
                type="text"
                class="w-5/12"
                name="model"
                placeholder="Model"
            />
        </div>

        <div class="flex space-x-4 justify-center">
            <x-input
                value="{{$car->body_type}}"
                type="text"
                class="w-5/12"
                name="body_type"
                placeholder="Body Type"
            />
            <x-input
                value="{{$car->year}}"
                type="number"
                class="w-5/12"
                name="year"
                placeholder="Year"
            />
        </div>

        <div class="flex space-x-4 justify-center">
            <x-input
                value="{{$car->mileage}}"
                type="number"
                class="w-5/12"
                name="mileage"
                placeholder="Mileage"
            />
            <x-input
                value="{{$car->code}}"
                type="number"
                class="w-5/12"
                name="code"
                placeholder="Code"
            />
        </div>
        <div class="flex space-x-4 justify-center">
             <x-select name="condition" class="w-5/12" >
                    <x-conditionsOptions value="{{$car->condition}}"/>
                </x-select>
            <x-input
                value="{{$car->colour}}"
                type="text"
                class="w-5/12"
                name="colour"
                placeholder="colour"
            />
        </div>
        <div class="flex space-x-4 justify-center">
            <x-input
                value="{{$car->number_of_seats}}"
                type="number"
                class="w-5/12"
                name="number_of_seats"
                placeholder="Number of seats"
            />
            <x-input
                value="{{$car->number_of_doors}}"
                type="number"
                class="w-5/12"
                name="number_of_doors"
                placeholder="Number of doors"
            />
        </div>

        <h1 class="text-xl font-semibold text-white text-center">
            Vehicle Performance
        </h1>

        <div class="flex space-x-4 justify-center">
             <x-select name="fuel_type" class="w-5/12" >
                    <x-fuelTypeOptions value="{{$car->fuel_type}}"/>
                </x-select>
            <x-input
                value="{{$car->tank_capacity}}"
                type="number"
                class="w-5/12"
                name="tank_capacity"
                placeholder="Fuel tank capacity"
            />
        </div>

        <div class="flex space-x-4 justify-center">
            <x-input
                value="{{$car->fuel_consumption}}"
                type="text"
                class="w-5/12"
                name="fuel_consumption"
                placeholder="Fuel consumption"
            />
            <x-input
                value="{{$car->engine_capacity}}"
                type="number"
                class="w-5/12"
                name="engine_capacity"
                placeholder="Engine Capacity"
            />
        </div>

        <div class="flex space-x-4 justify-center">
            <x-input
                value="{{$car->cylinder_layout}}"
                type="number"
                class="w-5/12"
                name="cylinder_layout"
                placeholder="Cylinder Layout"
            />
            <x-input
                value="{{$car->gears}}"
                type="number"
                class="w-5/12"
                name="gears"
                placeholder="Gears"
            />
        </div>

        <div class="flex space-x-4 justify-center">
              <x-select name="drive" class="w-5/12" >
                    <x-driveTypeOptions value="{{$car->drive}}"/>
                </x-select>

            <x-input
                value="{{$car->transmission}}"
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
                value="{{$car->reserved_price}}"
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
            placeholder="Additional car Description"
        >{{$car->description}}</textarea
        >

        <h1 class="text-xl font-semibold text-white text-center">
            Uploaded Vehicle Documents
        </h1>
        <div
            class="space-y-4 text-blue-600 h-40 overflow-y-auto border-2 border-dashed border-neutral-600 flex flex-col justify-center items-center"
        >
            @foreach($car->docs as $doc)
             <a href="/storage/{{$doc->path}}" target="_blank">{{$doc->path}}</a>
            @endforeach
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
