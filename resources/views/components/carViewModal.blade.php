@props(["list_view_id", "images"])


<div x-show="listView == {{$list_view_id}}" class=" absolute top-0 p-12 left-0 right-0 bottom-0 bg-blackLight ">
       <div  @click.outside="listView = null" class="transition-all	 flex flex-col p-2 bg-white  min-h-80 rounded-lg">
          <div x-data="{img: '{{$images[0]->path}}'}" class="border-2 ">
             <img  id="car_view_id_{{$list_view_id}}" src="/storage/{{$images[0]->path}}" class="md:w-3/5 block mx-auto"/>
          </div>
          <div class="flex space-x-4 items-center justify-center">
                @foreach($images as $img)   
                <button @click="
                  document.getElementById('car_view_id_{{$list_view_id}}').src = '/storage/{{$img->path}}'
                " >
                    <img src="/storage/{{$img->path}}" class="h-16 block mx-auto"/>
                </button>
                @endforeach
          </div>
       </div>
    </div>