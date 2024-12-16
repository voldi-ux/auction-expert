@props(["car"])

<div class="space-y-8">
    <form id="decline_listing" method="post" action="{{route('decline_listing', $car->id)}}">@csrf</form>
    <div class="flex items-center justify-center space-x-3">
        <img src="/storage/images/car2.png" class="w-14" />
        <h1 class="text-white text-xl">{{$car->make }}  {{$car->model }}</h1>
    </div>
    <form
        id="approve_listing"
        class="space-y-8 flex flex w-full"
        action="{{route('approve_listing', $car->id)}}"
        method="post"
    >
        <div class="w-1/2 space-y-8 p-2">
            @csrf
            <x-input
                 class="w-full"
                name="start_bid_amount"
                type="number"
                placeholder="Starting bid amount"
            />
            <x-input
                class="w-full"
                name="bid_increment"
                type="number"
                placeholder="Bid increment"
            />

            <h1 class="text-lg text-white font-medium">When ?</h1>
            <fieldset>
                <label class="text-white" for="now"
                    ><input
                        checked
                        type="radio"
                        name="when"
                        value="now"
                        id="now"
                    />
                    Now</label
                >
            </fieldset>
            <fieldset class="text-white">
                <label for="later"
                    ><input type="radio" name="when" value="later" id="later" />
                    Schedule auction</label
                >
            </fieldset>
        </div>
        <div class="flex-1 p-2 space-y-8">
            <fieldset class="space-x-2 flex">
                <x-input min="{{ date('Y-m-d') }}" class="flex-1" type="date" name="start_date" placeholder="Start date" />
            </fieldset>
            <fieldset class="space-x-2 flex">
                <x-input min="{{ date('Y-m-d') }}" class="flex-1" type="date" name="end_date"  placeholder="End date"/>
            </fieldset>
        </div>
    </form>

    <div class="flex space-x-4">
        <button form="approve_listing" class="md:w-1/2 bg-green-600 p-2 text-white ">
            Process
        </button>
        <button  type="submit" form="decline_listing" class="md:w-1/2 bg-red-600 font-semibold p-2 text-white ">
            Decline Listing
        </button>
    </div>
</div>
