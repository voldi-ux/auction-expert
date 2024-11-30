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
            <th >Date Listed</th>
            <th ></th>
            <th ></th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($listed_cars as $car)
            <tr class="text-white">
            <td class=""> <img src="/storage/{{$car->images[0]->path}}" class="w-16 mx-auto"/></td>
            <td class="">{{$car->make}}</td>
            <td class="">{{$car->model}}</td>
            <td class="">{{$car->user->name}}</td>
            <td class="">{{$car->created_at}}</td>
            <td class="" ><button @click="listView = {{$car->id}}" class="p-1 bg-white font-semibold text-black w-20 rounded-full">view</button></td>
            <td class="" ><button @click="listing = {{$car->id}}" class="p-1 bg-white font-semibold text-black w-20 rounded-full">Process</button></td>
                <x-processListedModal listing_id="{{$car->id}}" :car="$car"/>
                <x-carViewModal list_view_id="{{$car->id}}" :images="$car->images"/> 
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