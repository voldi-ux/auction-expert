@props(["auction"])

<div
    class="w-80 min-h-90 select-none p-2 gradient2 rounded-lg space-y-8 pb-2 transition-all hover:scale-105"
>
    <div class="bg-white rounded-lg">
        <!-- make the image clickable to go the next view of the auction -->
        <a
            class="h-40 block p-2"
            href="{{route('auction_view', $auction->id)}}"
        >
            <img
                src="/storage/{{$auction->car->images[0]->path}}"
                class="h-full mx-auto"
            />
        </a>
    </div>

    <div class="px-2">
        <h1 class="tex-lg text-white font-semibold text-center">
            {{$auction->car->make}} {{$auction->car->model}}
        </h1>
    </div>
    <div class="flex flex-col px-2 items-center justify-center">
        <h1 class="text-white">Top Bid</h1>
        <h1 id="card-top-amount-{{$auction->id}}"  auction-id = "{{$auction->id}}" class="card-top-amount text-3xl text-white font-bold">
            @if($auction->getTopBid() > 0)
            R {{number_format($auction->getTopBid())}}
            @else
            NO BIDS
            @endif
        </h1>
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
        @can("is-admin")
        <button
            class="gradient3 text-center p-2 text-lg w-full text-white font-bold"
        >
            Manage Auction
        </button>

        @else
        <button
            data-modal-target="live-auction.{{$auction->id}}"
            data-modal-toggle="live-auction.{{$auction->id}}"
            class="gradient3 text-center p-2 text-lg w-full text-white font-bold"
        >
            Bid
        </button>

        @endcan
    </div>
</div>

<x-modal modal_id="live-auction.{{$auction->id}}" title="Live Bdding">
    <x-auction :auction="$auction" />
</x-modal>


<script>
    window.onload = () => {
         auction.registerAuctions()
        let elements = document.getElementsByClassName("card-top-amount")

       for(let h of elements) {
        auction.registerTop(h)
       }
    }
</script>
