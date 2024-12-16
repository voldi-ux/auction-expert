<!-- to do
1) Some fields should have values but marked as disabled  
-->

@if(isset($message))
<x-toast :message="$message" />
@endif

<x-app-layout>
    <section class="p-8">
        <div class="rounded-lg gradient2 p-4">
            <form id="changePassword" action="/change-password"></form>

            @if(isset($user->profile))
            <x-profileForm.update :user="$user" />
            @else
            <x-profileForm.create />
            @endif
            <button
                class="w-full mt-20 p-4 bg-red-500 text-lg text-white"
                form="changePassword"
            >
                Click here to change your password
            </button>
        </div>
    </section>
</x-app-layout>
