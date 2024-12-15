@props(["auction"]) 


<div
    class="transition-all  select-none hover:scale-105 p-2  w-80 min-h-90 gradient2 rounded-lg space-y-8 pb-8"
>
    <div class="bg-white rounded-lg">
        <!-- make the image clickable to go the next view of the auction -->
        <a href="{{route('auction_view', $auction->id)}}" class="h-40 block p-2">
            <img src="/storage/{{$auction->car->images[0]->path}}" class="mx-auto h-full" />
        </a>
    </div>

    <div class="px-2 text-center">
        <h1 class="tex-lg text-white font-semibold  text-center">
            {{$auction->car->make}} {{$auction->car->model}}
        </h1>
    </div>
    <div class="flex flex-col px-2 items-center justify-center">
        <h1 class="text-white">Top Bid</h1>
           @if($auction->getTopBid() > 0) 
                            <h1 class="text-3xl text-white font-bold ">
                            R  {{number_format($auction->getTopBid())}}
                        </h1>
                        @else 
                        <h1 class="text-3xl text-white font-bold ">
                         NO BIDS
                    </h1>
                          @endif
    </div>
    <div class="flex justify-between px-2">
        <div>
            <h1 class="text-white">Car Mileage</h1>
        </div>

        <h1 class="text-gray">{{$auction->car->mileage}}Km</h1>
    </div>

    <div class="flex justify-between px-2">
        <div>
            <h1 class="text-white">Fuel type</h1>
        </div>

        <h1 class="text-gray">{{$auction->car->fuel_type}}</h1>
    </div>
    <div class="flex justify-between px-2">
        <div>
            <h1 class="text-white">Transmission</h1>
        </div>

        <h1 class="text-gray">{{$auction->car->transmission}}</h1>
    </div>

    <div class="flex justify-between px-2 text-white">
        <div class="text-center">
            <h1 class="text-sm">Time remaining</h1>
            <h1 class="text-sm">
                 {{$auction->remainingTimeFormated()}}
            </h1>
        </div>
        <div class="text-center">
            <h1 class="text-sm">Closing date</h1>
            <h1 class="text-xs">{{$auction->formatedEndtime()}}</h1>
        </div>
    </div>
</div>
