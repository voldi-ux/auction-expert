
@if(session("status"))
    <x-toast type="success" :message="session('status')"/> 
@endif

<x-guest-layout>
   <div class="container mx-auto flex w-full h-full justify-center items-center ">
      <form method="post" action="{{route('password.request')}}" class="w-1/2 p-2 gradient2 rounded-lg space-y-8">
        @csrf
        <x-error-message name="email" class="w-4/5"/>
        <x-input type="email" name="email" placeholder="Enter your email" />
         <div class="flex justify-center">
             <x-auth.button > 
            <h1>  Send rest link</h1>
         </x-auth.button>
         </div>
    </form>
   </div>
</x-guest-layout>