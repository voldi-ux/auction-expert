
<!-- testing  -->
@php
$bids = array_map(fn() => rand(1, 100), range(1, 10));
@endphp


<!-- for admins to see all currently running auctions -->

<x-app-layout>
   <section class="my-8 p-8">
         <div class=" flex flex-col container mx-auto rounded-lg min-h-long gradient2 pb-8 min-h-64">
        <table class="flex-1 w-full border-separate border-spacing-y-8">
        <thead class="text-white font-semibold capitalize text-lg">
            <tr>
            <th ></th>
            <th >Name</th>
            <th >Model</th>
            <th >owner</th>
            <th >Date started</th>
            <th >Top Bid</th>
            <th ></th>
            <th ></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($auctions as $auction)
                <tr class="text-white">
                <td class=""> <img src="/storage/{{$auction->car->images[0]->path}}" class="w-16 mx-auto"/></td>
                <td class="">{{$auction->car->make}}</td>
                <td class="">{{$auction->car->model}}</td>
                <td class="">{{$auction->car->user->name}}</td>
                <td class="">{{$auction->car->created_at}}</td>
                <td class="">R200k</td>
                <td class="" ><button @click="auction=true" class="p-1 bg-white font-semibold text-black w-20 rounded-full">view</button></td>
                <td class="" ><button class="p-1 bg-white font-semibold text-black w-20 rounded-full">Manage</button></td>
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