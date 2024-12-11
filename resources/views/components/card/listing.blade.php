<x-modal modal_id="listing-process-modal"  title="Process Listing"> 
     <x-processListedModal />
</x-modal>
<x-modal modal_id="listing-process-view-modal"  title="Uploaded Vehicle Information">
   <x-uploadedVehicleInfo />    
</x-modal>
<x-modal modal_id="listing-images-view-modal"  title="Uploaded Vehicle Images">
   <x-uploadedImagesSlider />    
</x-modal>
<div class="w-80 min-h-90 gradient2 rounded-lg space-y-4 pb-8 transition-all hover:scale-110">
    <div class="bg-white rounded-lg">
        <!-- make the image clickable to go the next view of the auction -->
        <a href="/auction/id">
            <img src="/storage/images/car1.png" />
        </a>
    </div>
    <h1 class="text-lg text-white text-center font-semibold">Toyata 2020 v1</h1>
    <div class="flex justify-between px-2">
        <div>
            <h1 class="text-white">Car Mileage</h1>
        </div>

        <h1 class="text-gray">400Km</h1>
    </div>

    <div class="flex justify-between px-2">
        <div>
            <h1 class="text-white">Fuel type</h1>
        </div>

        <h1 class="text-gray">Petrol</h1>
    </div>
    <div class="flex justify-between px-2">
        <div>
            <h1 class="text-white">Transmission</h1>
        </div>

        <h1 class="text-gray">Manual</h1>
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

    <div class="flex justify-between px-2">
        <h1 class="text-white text-sm">Listed Time</h1>
        <h1 class="text-xs font-bold text-orange">Mon, 08, Dec 10:00am</h1>
    </div>
</div>
