<!-- to do
 if it is an admin and they are on the is_dashboard only then I should hide the banner and display the manage button at the bottom otherwise display the starts soon banner 

-->

@props(["is_dashboard" => false, "auction"]) @if($is_dashboard == true)
<x-modal modal_id="listed-scheduled-view" title="Scheduled Auction Details">
</x-modal>
@endif

<div
    class="w-80 min-h-90 transition-all p-2 hover:scale-105 gradient2 rounded-lg space-y-4 pb-8"
>
    <div class="bg-white rounded-lg">
        <!-- make the image clickable to go the next view of the auction -->
        <a
            href="{{route('auction_view', $auction->id)}}"
            class="h-40 block p-2"
        >
            <img
                src="/storage/{{$auction->images[0]->path}}"
                class="h-full block"
            />
        </a>
    </div>
    <h1 class="text-lg text-white text-center font-semibold">
        {{$auction->make}}
        {{$auction->model}}
    </h1>
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

    <p class="gradient3 text-center p-4 text-lg text-white font-bold mx-2">
        Starts Soon
    </p>

    <div class="flex justify-between px-2">
        <h1 class="text-white text-sm">Starting Bid</h1>
        <h1 class="text-2xl font-bold text-orange">
            R {{number_format($auction->auction->start_bid_amount)}}
        </h1>
    </div>

    <div class="flex justify-between px-2">
        <h1 class="text-white text-sm">Scheduled for</h1>
        <h1 class="text-xs font-bold text-orange">
            {{$auction->auction->formatScheduledDate()}}
        </h1>
    </div>

    @if($is_dashboard)
    <button
        data-modal-target="listed-scheduled-view"
        data-modal-toggle="listed-scheduled-view"
        class="gradient3 text-center p-2 text-lg w-full text-white font-bold"
    >
        Manage
    </button>
    @endif
</div>
