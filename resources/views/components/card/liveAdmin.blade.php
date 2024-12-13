@props(["auction"])




<div class="w-80 min-h-90 p-2 gradient2 rounded-lg space-y-8 pb-2 transition-all hover:scale-105">
    <div class="bg-white rounded-lg">
        <!-- make the image clickable to go the next view of the auction -->
        <a  class="h-40 block p-2" href="{{route('auction_view', $auction->id)}}">
            <img src="/storage/images/car1.png"  class="h-full mx-auto"/>
        </a>
    </div>

    <div class="px-2">
        <h1 class="tex-lg text-white font-semibold text-center">
            {{$auction->car->make}}  {{$auction->car->model}}
        </h1>
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
            <h1 class="text-xs">
                {{$auction->formatedEndtime()}}
            </h1>
        </div>
    </div>
    <div class="px-2">
        <button
            class="gradient3 text-center p-2 text-lg w-full text-white font-bold"
        >
            Manage Auction
        </button>
    </div>
</div>
