@props(["car"])

<div class="space-y-8">
    <form method="post" action="/app/decline-car/car">@csrf</form>
    <div class="flex items-center justify-center space-x-3">
        <img src="/storage/images/car2.png" class="w-14" />
        <h1 class="text-white text-xl">Toyota</h1>
    </div>
    <form
        id=""
        class="space-y-8 flex flex w-full"
        action="/app/create-auction/car"
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
                <x-input class="flex-1" type="date" name="start_date" />
                <label class="text-white"" for="start_date">Start date</label>
            </fieldset>
            <fieldset class="space-x-2 flex">
                <x-input class="flex-1" type="date" name="end_date" />
                <label class="text-white" for="end_date">End date</label>
            </fieldset>
        </div>
    </form>

    <div class="flex space-x-4">
        <button form="" class="md:w-1/2 bg-green-600 p-2 text-white ">
            Process
        </button>
        <button type="submit" form="" class="md:w-1/2 bg-red-600 font-semibold p-2 text-white ">
            Decline Listing
        </button>
    </div>
</div>
