@props(["car"])


@php


$style = "";

switch($car->status) {
case "active":
  $style = "bg-green-500";
break;
case "pending":
 $style = "bg-gray";
break;
case "declined":
 $style = "bg-red-500";
break;
default:
 $style = "bg-white";

}
@endphp


<x-modal modal_id="listed-view" title="Auction Details" >
   
</x-modal>

<div class="w-80 min-h-90 gradient2 p-2 rounded-lg space-y-4 pb-8 transition-all hover:scale-105">
                <div class="bg-white rounded-lg">
                    <!-- make the image clickable to go the next view of the auction -->
                        <div class="h-40 block p-2">
                            <img src="/storage/{{$car->images[0]->path}}" class="block h-full mx-auto" />
                        </div>
    
                </div>
                <h1 class="text-lg text-white text-center font-semibold">
                    {{$car->make}}
                    {{$car->model}}
                </h1>
                <div class="flex justify-between px-2">
                    <div>
                        <h1 class="text-white">Car Mileage</h1>
                    </div>

                    <h1 class="text-gray">{{$car->mileage}}Km</h1>
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
                
                <div class="flex justify-between px-2">
                    <div>
                        <h1 class="text-white">Auction Status</h1>
                    </div>

                    <div class="flex items-center space-x-1">
                        <div class="w-2 h-2 rounded-full inline-block animate-pulse {{$style}} "></div>
                        <h1 class="text-gray">
                             {{$car->status}}
                        </h1>
                    </div>
                </div>

                
                <div class="flex justify-between px-2">
                    <h1 class="text-white ">Listed Time</h1>
                    <h1 class="text-xs font-bold text-orange">
                       {{$car->formatedEndtime()}}
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