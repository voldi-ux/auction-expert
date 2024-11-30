@props(["listing_id", "car"])

<div x-show="listing == {{$listing_id}}" class="absolute top-0 p-12 left-0 right-0 bottom-0 bg-blackLight ">

@error("when")
  <h1 class="text-red-500 text-lg ">
    {{$message}}
  </h1>
@enderror
@error("bid_increment")
  <h1 class="text-red-500 text-lg ">
    {{$message}}
  </h1>
@enderror

    <form method="post" action="/app/decline-car/{{$car->id}}">
        @csrf
    </form>
       <div @click.outside="listing = null" class="flex flex-col p-8 gradient2 space-y-8 min-h-80 rounded-lg">
            <div class="flex items-center justify-center space-x-3">
                <img src="/storage/images/car2.png" class="w-14" />
                <h1 class="text-white text-xl "> {{$car->make}}</h1>
            </div>

            <div class="flex text-lg text-white">
                 <div class="space-y-8 md:w-1/2">
                    <form id="process_{{$listing_id}}"  class="space-y-8 flex flex-col w-full"  action="/app/create-auction/{{$car->id}}" method="post">
                        @csrf
                        <x-input name="bid_increment" type="number" placeholder="Bid increment" />

                        <h1>When ?</h1>
                         <fieldset> 
                            <label for="now"><input checked type="radio" name="when"  value="now" id="now"> Now</label>
                         </fieldset>
                         <fieldset>
                             <label for="later"><input type="radio" name="when" value="later" id="later"> Schedule auction</label>
                         </fieldset>
                    
                        <fieldset class="space-x-2">
                          <x-input  type="date" name="start_date"/>
                           <label for="start_date">Start date</label>
                        </fieldset>
                        <fieldset class="space-x-2">
                          <x-input  type="date" name="end_date"/>
                           <label for="end_date">End date</label>
                        </fieldset>
                    </form>

                    <div class="flex space-x-4">
                        <button form="process_{{$listing_id}}" class="md:w-1/2 bg-green-600 font-semibold">
                            Process
                        </button>
                        <button type="submit" form="decline_{{$listing_id}}" class="md:w-1/2  bg-red-600 font-semibold">
                             Decline Listing
                        </button>
                    </div>
                 </div>
                 <div class="flex-1">
                     <img src="/storage/images/car2.png" alt="" class="animate-pulse block mx-auto">                    
                 </div>
            </div>
       </div>
    </div>