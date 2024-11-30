@props(["auction_view_id", "bids"])



<!-- dev purposes -->
@php
$nums = array_map(fn() => rand(0,8), range(1,30));
@endphp

<div  x-show="auction" class=" absolute top-0 p-12 left-0 right-0 bottom-0 bg-blackLight ">
       <div  @click.outside="auction = null" class="transition-all	 flex flex-col p-2 gradient2  h-full rounded-lg p-8  ">
           <div class="flex flex-col p-2  relative h-full  p-8 bg-center bg-cover  bg-hero ">
              <div class="flex justify-between">
              <div class="text-lg font-semibold">
                <h1 class="text-orange-500">
                    Time remaing
                </h1>
                <h1 class="text-white">
                    5 hours : 34min : 21s
                </h1>
              </div>
              <div class="text-lg font-semibold">
                <h1 class="text-orange-500">
                    Top Bid Amount
                </h1>
                <h1 class="text-white">
                   R 5000k
                </h1>
              </div>
          </div>
               <div class="flex justify-center items-center  absolute bottom-0 left-4 animate-slide h-16 w-16 rounded-full bg-green-500">
                     <h1 class="text-white">
                        R{{rand(0,40)}}K
                     </h1>
               </div>
               <div class="flex justify-center delay-1 items-center  absolute bottom-0 left-20 animate-slide h-16 w-16 rounded-full bg-cyan-500">
                     <h1 class="text-white">
                        R{{rand(0,40)}}K
                     </h1>
               </div>
               <div class="flex justify-center items-center  absolute bottom-0 left-40 animate-slide h-16 w-16 rounded-full bg-yellow-500">
                     <h1 class="text-white">
                        R{{rand(0,40)}}K
                     </h1>
               </div>
               <div class="flex justify-center delay-2 items-center  absolute bottom-0 left-80 animate-slide h-16 w-16 rounded-full bg-blue-500">
                     <h1 class="text-white">
                        R{{rand(0,40)}}K
                     </h1>
               </div>
          <div class="mt-auto flex space-x-4 items-center justify-center">
               <div>
                  <h1 class="text-white font-size ">Bid Amount  </h1>
               </div>
                @foreach($bids as $bid)   
                <button class="transition-all hover:-translate-y-2 hover:text-orange-500 w-20 rounded-full text-white color-white ">
                     <div>
                        R {{rand(0,100)*10}}K
                     </div>
                </button>
                @endforeach
          </div>
           </div>
       </div>
    </div>