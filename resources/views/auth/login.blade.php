<x-guest-layout>
   <div class="container mx-auto flex w-full h-full justify-center items-center ">
             <div class=" md:w-1/2 h-80 p-4 rounded-lg gradient2" >
               <x-error-message name="email"/>
               <x-error-message name="password"/>
             <form action="/login" method="post" class="flex flex-col space-y-8">
               @CSRF
                <x-input name="email" placeholder="email" />
                <x-input name="password" type="password"  placeholder="enter your password" />
                <button class="pd-4 bg-white text-black text-lg w-20 font-semibold self-center my-4" type="submit"> Login </button>
             </form>
             </div>
             <div class="flex-1 flex justify-center ">
                <img src="/storage/images/car6.png"  class="animate-pulse md:h-96"/>
             </div>
 </div>
</x-guest-layout>