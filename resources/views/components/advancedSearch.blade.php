<div class="space-y-8">
    <x-select name="make" class="w-full text-orange">
        <x-carMakeOptions />
    </x-select>

    <x-input name="model" placeholder="Car Model" class="text-orange" />

    <x-select name="transmission" class="w-full text-orange">
        <x-transmissionTypeOptions /> />
    </x-select>

    <x-select name="fuel_type" class="w-full text-orange">
        <x-fuelTypeOptions />
    </x-select>
    <x-select name="body_type" class="w-full text-orange">
        <x-carBodyTypeOptions  />
    </x-select>

    <x-select name="drive" class="w-full text-orange">
        <x-driveTypeOptions />
    </x-select>
    <button class="gradient2 text-white p-2 w-full rounded-lg">Filter</button>
</div>
