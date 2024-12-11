<x-modal modal_id="listed-view" title="Auction Details" >
   
</x-modal>

<div class="w-80 min-h-90 gradient2 rounded-lg space-y-4 pb-8 transition-all hover:scale-110">
                <div class="bg-white rounded-lg">
                    <!-- make the image clickable to go the next view of the auction -->
                    <a href="/auction/id">
                        <img src="/storage/images/car1.png" />
                    </a>
                </div>
                <h1 class="text-lg text-white text-center font-semibold">
                    Toyata 2020 v1
                </h1>
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
                
                <div class="flex justify-between px-2">
                    <div>
                        <h1 class="text-white">Auction Status</h1>
                    </div>

                    <div class="flex items-center space-x-1">
                        <div class="w-2 h-2 rounded-full inline-block bg-green-600 animate-pulse"></div>
                        <h1 class="text-gray">
                            Live
                        </h1>
                    </div>
                </div>

                
                <div class="flex justify-between px-2">
                    <h1 class="text-white ">Listed Time</h1>
                    <h1 class="text-xs font-bold text-orange">
                        Mon, 08, Dec 10:00am
                    </h1>
                </div>
                <div class="px-2">
                    <button
                        data-modal-target="listed-view"
                        data-modal-toggle="listed-view"
                        class="gradient3 text-center p-2 text-lg w-full text-white font-bold"
                    >
                      View Details
                    </button>
                </div>
            </div>