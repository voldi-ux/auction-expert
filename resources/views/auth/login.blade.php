<x-guest-layout>
   <div class="container mx-auto flex w-full h-full justify-center items-center ">
             <div class=" md:w-1/2 min-h-80 p-4 rounded-lg gradient2" >
               <x-error-message name="email"/>
               <x-error-message name="password"/>
             <form action="/login" method="post" class="flex flex-col space-y-8">
               @CSRF
                <x-input name="email" placeholder="Email" />
                <x-input name="password" type="password"  placeholder="Enter your password" />
               <div class="space-x-2 flex">
                  <h1 class="text-gray">
                     Do not have an account ? 
                  </h1>
                  <a href="{{route('register')}}" class="text-white text-sm">Register</a>
                  <h2 class="text-gray">
                     OR
                  </h2>
                  <a href="{{route('login')}}" class="text-white text-sm">Reset your password</a>
               </div>
                 <x-auth.button > 
                   <h1>  Login</h1>
                </x-auth.button>
             </form>
             </div>
             <div class="flex-1 flex justify-center ">
                <img src="/storage/images/car6.png"  class="animate-pulse md:h-96"/>
             </div>
 </div>
</x-guest-layout>