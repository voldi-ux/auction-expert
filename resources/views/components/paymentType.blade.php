@props(["auction_ref" => "CT000000000", "auction"])


<!-- drawer component -->
<div id="drawer-payment-type" class="gradient2 text-white fixed bottom-0 left-0 right-0 z-40 w-full p-4 overflow-y-auto transition-transform bg-white dark:bg-gray-800 translate-y-full " tabindex="-1" aria-labelledby="drawer-bottom-label">
    <button type="button" data-drawer-hide="drawer-payment-type" aria-controls="drawer-payment-type" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
      <span class="sr-only">Close menu</span>
   </button>
   <div class="font-sans   flex justify-center items-center flex-col">
            <section class="min-h-90 p-4  rounded-lg  py-20 space-y-8 flex text-white flex-col justify-center items-center w-4/5">
         <h1 class="text-center text-3xl font-semibold">
            How would you like to pay the deposit ?
         </h1>
          <form action="{{route('pay_deposit', $auction->id)}}" method="post" >
            @csrf
             <button class="p-2 text-lg animate-pulse bg-dark1 w-60 text-white rounded-full justify-center">
                Securely pay online
               </button>
            </form>
         <h1 class="text-2xl font-bold">
            OR
         </h1>
         <div class="flex space-x-2">
            <h1 class="text-lg">
                Visit a branch and make deposit reference no
            </h1>
            <h1 class="text-lg font-bold">
                {{$auction_ref}}
            </h1>
         </div>
         <div class="w-full space-y-2">
            <h1>
                Banking Details
            </h1>
            <div class=" border-2  border-gray w-long p-4">
               <div class="flex justify-between">
                  <h1 class="text-lg text-white font-bold">Account Name</h1>
                  <h1 class="text-lg text-gray">Auction Expert</h1>
               </div>
               <div class="flex justify-between">
                  <h1 class="text-lg text-white font-bold">Bank</h1>
                  <h1 class="text-lg text-gray">First National Bank (FNB)</h1>
               </div>
               <div class="flex justify-between">
                  <h1 class="text-lg text-white font-bold">Account Type</h1>
                  <h1 class="text-lg text-gray">Checque</h1>
               </div>
               <div class="flex justify-between">
                  <h1 class="text-lg text-white font-bold">Branch Code</h1>
                  <h1 class="text-lg text-gray">393988</h1>
               </div>
               
               <div class="flex justify-between">
                  <h1 class="text-lg text-white font-bold">Reference</h1>
                  <h1 class="text-lg text-gray">{{$auction_ref}}</h1>
               </div>


            </div>
         </div>
      </section>   
   </div>
</div>
