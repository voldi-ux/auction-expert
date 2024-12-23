@props(["auction"])

<div
    class="transition-all select-none hover:scale-105 p-2 w-80 min-h-90 gradient2 rounded-lg space-y-8 pb-8"
>
    <div class="bg-white rounded-lg">
        <!-- make the image clickable to go the next view of the auction -->
        <a
            href="{{route('auction_view', $auction->id)}}"
            class="h-40 block p-2"
        >
            <img
                src="/storage/{{$auction->images[0]->path}}"
                class="mx-auto h-full"
            />
        </a>
    </div>

    <div class="px-2 text-center">
        <h1 class="tex-lg text-white font-semibold text-center">
            {{$auction->make}} {{$auction->model}}
        </h1>
    </div>
    <div class="flex flex-col px-2 items-center justify-center">
        <h1 class="text-white">Top Bid</h1>
        @if($auction->auction->getTopBid() > 0)
        <h1 auction-id="{{$auction->auction->id}}" class="card-top-amount text-3xl text-orange font-bold">
            R {{number_format($auction->auction->getTopBid())}}
        </h1>
        @else
        <h1 auction-id="{{$auction->auction->id}}" class="text-3xl text-orange font-bold card-top-amount">NO BIDS</h1>
        @endif
    </div>
    <div class="flex justify-between px-2">
        <div>
            <h1 class="text-white">Car Mileage</h1>
        </div>

        <h1 class="text-gray">{{$auction->mileage}}Km</h1>
    </div>

    <div class="flex justify-between px-2">
        <div>
            <h1 class="text-white">Fuel type</h1>
        </div>

        <h1 class="text-gray">{{$auction->fuel_type}}</h1>
    </div>
    <div class="flex justify-between px-2">
        <div>
            <h1 class="text-white">Transmission</h1>
        </div>

        <h1 class="text-gray">{{$auction->transmission}}</h1>
    </div>
    <div class="flex justify-between px-2">
        <div>
            <h1 class="text-white">Condition</h1>
        </div>

        <h1 class="text-gray">{{$auction->condition}}</h1>
    </div>

    <div class="flex justify-between px-2 text-white">
        <div class="text-center">
            <h1 class="text-sm">Time remaining</h1>
            <h1 class="text-sm">
                {{$auction->auction->remainingTimeFormated()}}
            </h1>
        </div>
        <div class="text-center">
            <h1 class="text-sm">Closing date</h1>
            <h1 class="text-xs">{{$auction->auction->formatedEndtime()}}</h1>
        </div>
    </div>
</div>

<script>
    window.onload = () => {
         
        let elements = document.getElementsByClassName("card-top-amount")

       for(let h of elements) {
        auction.registerTop(h)
       }
    }
</script>