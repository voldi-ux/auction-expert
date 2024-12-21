@props(["auto_bids" => [1,2,3,4,5] ,"auction"])

<!-- dev purposes -->
@php
$increment = $auction->bid_increment;
@endphp
           <div class="flex flex-col p-2  relative h-full  p-8 bg-center bg-cover  bg-hero ">
              <div class="flex justify-between">
              <div class="text-lg font-semibold">
                <h1 class="text-orange">
                    Time remaing
                </h1>
                <h1 class="text-white">
                    {{$auction->remainingTimeFormated()}}
                </h1>
              </div>
              <div class="text-lg font-semibold">
                <h1 class="text-orange">
                    Bid Increment
                </h1>
                <h1 class="text-white">
                    R {{number_format($increment)}}
                </h1>
              </div>
              <div class="text-lg font-semibold">
                <h1 class="text-orange" >
                    Top Bid Amount
                </h1>
                <h1  id="top-bid-{{$auction->id}}" value="{{$auction->getTopBid()}}" class="text-white">
                      @if($auction->getTopBid() > 0) 
                            <h1 class="text text-white font-bold ">
                            R {{number_format($auction->getTopBid())}}
                        </h1>
                        @else 
                        <h1 class="text-3xl text-white font-bold ">
                         NO BIDS
                    </h1>
                          @endif
                </h1>
              </div>
          </div>
               <div class="flex justify-center font-bold items-center  absolute bottom-0 left-4 animate-slide h-16 w-16 rounded-full bg-green-500">
                     <h1 class="text-white">
                        R{{rand(0,40)}}K
                     </h1>
               </div>
               <div class="flex justify-center font-bold delay-1 items-center  absolute bottom-0 left-20 animate-slide h-16 w-16 rounded-full bg-cyan-500">
                     <h1 class="text-white">
                        R{{rand(0,40)}}K
                     </h1>
               </div>
               <div class="flex justify-center font-bold items-center  absolute bottom-0 left-40 animate-slide h-16 w-16 rounded-full bg-yellow-500">
                     <h1 class="text-white">
                        R{{rand(0,40)}}K
                     </h1>
               </div>
               <div class="flex justify-center font-bold delay-2 items-center  absolute bottom-0 left-80 animate-slide h-16 w-16 rounded-full bg-blue-500">
                     <h1 class="text-white">
                        R{{rand(0,40)}}K
                     </h1>
               </div>
          <div class="mt-auto flex space-x-4 items-center justify-center myBg p-2">
               <div>
                  <h1 class="text-white font-size ">Bid Amount  </h1>
               </div>
                @foreach($auto_bids as $bid)   
                <button onclick="auction.quickBid(this)" value="{{ ($auction->getTopBid() + $bid*$auction->bid_increment) }}" auction="{{$auction->id}}" class="transition-all hover:-translate-y-2 hover:text-orange min-w-20 font-bold text-lg rounded-full text-yellow-500  font-semibold auto-bid-{{$auction->id}}">
                     
                        R {{number_format($auction->getTopBid() + $bid*$auction->bid_increment)}}
                     
                </button>
                @endforeach
          </div>
          <div class="flex p-2 items-center justify-center space-x-4">
              <div class="relative z-0 w-full group">
      <input auction="{{$auction->id}}"  type="number"  name="bid" id="own-bid-{{$auction->id}}"  class="text-lg text-white block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="bid" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 text-lg text-white">Enter your own amount</label>
  </div>
             <button  onclick="auction.bidButton(this)" class="border border-orange p-2 w-20 hover:scale-105 transition-all" auction="{{$auction->id}}">
               Bid
             </button>
          </div>
           </div>
     
          
            <script>
             
               
            //  any ele passed to this function must have two requred attributes i.e value and auction(auction_id)
              
            </script>
   


    