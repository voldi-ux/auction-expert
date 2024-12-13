@props(['car'])



<x-modal modal_id="listing-process-modal"  title="Process Listing"> 
     <x-processListedModal :car="$car" />
</x-modal>
<x-modal modal_id="listing-process-view-modal"  title="Uploaded Vehicle Information">
   <x-uploadedVehicleInfo :car="$car" />    
</x-modal>
<x-modal modal_id="listing-images-view-modal"  title="Uploaded Vehicle Images">
   <x-uploadedImagesSlider :images="$car->images" />    
</x-modal>
<div class="w-80 min-h-90 gradient2 p-2 rounded-lg space-y-4 pb-8 transition-all hover:scale-110">
    <div class="bg-white rounded-lg">
        <!-- make the image clickable to go the next view of the auction -->
        <a href="/auction/id" class="h-40 block p-2">
            <img src="/storage/{{$car->images[0]->path}}" class="h-full mx-auto"  />
        </a>
    </div>
    <h1 class="text-lg text-white text-center font-semibold">{{$car->model}}  {{$car->year}}</h1>
    <div class="flex justify-between px-2">
        <div>
            <h1 class="text-white">Car Mileage</h1>
        </div>

        <h1 class="text-gray"> {{$car->mileage}}Km</h1>
    </div>

    <div class="flex justify-between px-2">
        <div>
            <h1 class="text-white">Fuel type</h1>
        </div>

        <h1 class="text-gray">{{$car->fuel_type}}</h1>
    </div>
    <div class="flex justify-between px-2">
        <div>
            <h1 class="text-white">Transmission</h1>
        </div>

        <h1 class="text-gray">{{$car->transmission}}</h1>
    </div>
    <button
        data-modal-target="listing-process-view-modal"
        data-modal-toggle="listing-process-view-modal"
        class="text-center p-2  w-full text-white font-bold"
    >
         View uploaded information
    </button>
          <button
            class="text-center p-2  w-full text-white font-bold"
             data-modal-target="listing-images-view-modal"
             data-modal-toggle="listing-images-view-modal"
            >View uploaded Images</button>

    <div class="px-2 flex justify-center space-x-2">
        <button
            data-modal-target="listing-process-modal"
            data-modal-toggle="listing-process-modal"
            class="gradient3 text-center p-2 text-lg w-full text-white font-bold"
        >
            Process
        </button>
    </div>

    <div class="flex justify-between px-2 items-center">
        <h1 class="text-white text-xs">Listed Time</h1>
        <h1 class="text-xs font-bold text-orange">{{$car->created_at->format('D, M j, Y, g:ia')}}</h1>
    </div>
</div>
