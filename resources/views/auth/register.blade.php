<x-guest-layout>
    <div
        class="container mx-auto flex w-full h-full justify-center items-center"
    >
        <div class="md:w-1/2 min-h-80 p-4 rounded-lg gradient2">
            @error('name')
            <div class="text-lg text-white bg-red-400">{{ $message }}</div>
            @enderror @error('email')
            <div class="text-lg text-white bg-red-400">{{ $message }}</div>
            @enderror @error('password')
            <div class="text-lg text-white bg-red-400">{{ $message }}</div>
            @enderror
            <x-error-message name="name" />
            <x-error-message name="email" />
            <x-error-message name="password" />
            <form
                action="/register"
                method="post"
                class="flex flex-col space-y-8"
            >
                @CSRF
                <x-input name="name" type="text" placeholder="Name" />
                <x-input name="email" type="text" placeholder="Email" />
                <x-input
                    name="password"
                    type="password"
                    placeholder="Password"
                />
                <x-input
                    name="password_confirmation"
                    type="password"
                    placeholder="Confirm Password"
                />
                   <div class="space-x-2 flex items-center">
                  <h1 class="text-gray ">
                     Alaready have an account ? 
                  </h1>
                  <a href="{{route('login')}}" class="text-white text-sm hover:text-orange transition-all">Sign In</a>
        
               </div>
                <x-auth.button > 
                   <h1>  Register</h1>
                </x-auth.button>
            </form>
        </div>
        <div class="flex-1 flex justify-center">
            <img src="/storage/images/car6.png" class="animate-pulse md:h-96" />
        </div>
    </div>
</x-guest-layout>
