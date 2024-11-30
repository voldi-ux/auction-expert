<x-app-layout>
   <section class="p-8 h-full">
     @if (session('message'))
          <x-toast :message="session('message')" />
     @endif

      <form action="/store-car"  method="post" class="w-full min-h-long p-4 gradient2 space-y-12 rounded-lg" enctype="multipart/form-data">
          @CSRF
          <div class="flex flex w-full space-x-4 text-lg text-white">
                <div class="space-y-8 flex  flex-col md:w-1/2">
                    <input  type="text"   class="border-slate-700 border-0 border-b-2 bg-transparent h-8" name="make" placeholder="Brand"/>
                    <input  type="text"  class="border-slate-700 border-0 border-b-2 bg-transparent h-8" name="body_type" placeholder="Car Body Type"/>
                    <input  type="text"  class="border-slate-700 border-0 border-b-2 bg-transparent h-8" name="milage" placeholder="Car Milage"/>
                </div>
            <div class="space-y-8 flex flex-col md:w-1/2">
                <input  type="text"  class="border-slate-700 border-0 border-b-2 bg-transparent h-8" name="model" placeholder="Car Model"/>
                <input  type="number"  class="border-slate-700 border-0 border-b-2 bg-transparent h-8" name="year_made" placeholder="Year made"/>
                <input  type="text"  class="border-slate-700 border-0 border-b-2 bg-transparent h-8" name="condition" placeholder="car condition"/>
            </div>
        </div>
        <div class="h-40 border-2 border-dashed border-neutral-600 flex justify-center items-center">
            <input type="file"  name="images[]" multiple accept="image/*" placeholder="click here to add image drop an image"  />
        </div>
         <button class="mx-auto bg-white w-20 font-semibold text-lg capitalize block">list</button>
      </form>
   </section>
</x-app-layout>