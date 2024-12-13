@props(["auction"]) 


<div
    class="transition-all hover:scale-110 w-80 min-h-90 gradient2 rounded-lg space-y-8 pb-8"
>
    <div class="bg-white rounded-lg">
        <!-- make the image clickable to go the next view of the auction -->
        <a href="{{route('auction_view', $auction->id)}}" class="h-40 block p-2">
            <img src="/storage/images/car1.png" class="mx-auto" />
        </a>
    </div>

    <div class="flex px-2 justify-between items-center">
        <h1 class="tex-lg text-white font-semibold">
            {{$auction->car->make}} {{$auction->car->model}}
        </h1>
        <i class="fa fa-heart text-lg text-white"></i>
    </div>
    <div class="flex flex-col px-2 items-center justify-center">
        <h1 class="text-white">Top Bid</h1>
        <h1 class="font-semibold text-orange">R 4000 000</h1>
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
