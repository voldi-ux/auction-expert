<!-- testing  -->
@php
$bids = array_map(fn() => rand(1, 100), range(1, 10));
@endphp


<x-app-layout>
    <x-filter-header />
   <section class="p-8">
         <div class="container mx-auto rounded-lg gradient2 pb-8 min-h-64">
        <table class="w-full border-separate border-spacing-y-8">
        <thead class="text-white font-semibold capitalize text-lg">
            <tr>
            <th ></th>
            <th >Name</th>
            <th >Model</th>
            <th >owner</th>
            <th >Top Bid</th>
            <th ></th>
            </tr>
        </thead>
        <tbody>
            @foreach(range(1,5) as $num)
             <tr class="text-white">
            <td class=""> <img src="/storage/images/car{{$num}}.png" class="w-16 mx-auto"/></td>
            <td class="">Mercdez Benz</td>
            <td class="">2019xr</td>
            <td class="">Voldi</td>
            <td class="">R200k</td>
            <td class="" ><button  @click="auction=true" class="p-1 bg-white font-semibold text-black w-20 rounded-full">view</button></td>
             <x-auction  auction_view_id="" :bids="$bids"/>
            </tr>
            @endforeach
        </tbody>
        </table>
          <div class="flex justify-center">
             <button class="p-1 bg-white font-semibold min-w-20 mx-2" >Previous</button>
             <button class="p-1 bg-white font-semibold min-w-20 mx-2">Next</button>
          </div>
         </div>
    </section> 
</x-app-layout>