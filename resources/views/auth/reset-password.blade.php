<x-guest-layout>
    <div class="container mx-auto flex w-full h-full justify-center items-center ">
        <div class=" md:w-1/2 min-h-80 p-4 rounded-lg gradient2" >
            <x-error-message name="email"/>
            <x-error-message name="password"/>
            <form action="{{route('password.update')}}" method="post" class="flex flex-col space-y-8">
                @csrf
                <x-input name="token" type="hidden" value="{{$token}}"/>
                <x-input name="email" placeholder="Email" />
                <x-input name="password" type="password"  placeholder="Enter your password" />
                <x-input name="password_confirmation" type="password"  placeholder="Confirm your password" />
                <x-auth.button > 
                    <h1>  Reset Password</h1>
                </x-auth.button>
            </form>
        </div>
        <div class="flex-1 flex justify-center ">
            <img src="/storage/images/car6.png"  class="animate-pulse md:h-96"/>
        </div>
    </div>
</x-guest-layout>