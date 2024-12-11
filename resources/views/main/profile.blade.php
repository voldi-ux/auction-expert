<!-- to do
1) Some fields should have values but marked as disabled  
-->

<x-app-layout>
    <section class="p-8 ">
         <div class="rounded-lg gradient2 p-4">
            <form id="changePassword" action="/change-password"></form>
        <form
            id="create-seller"
            class="space-y-8 p-2"
            action="/create-seller"
            method="post"
        >
            @CSRF
            <h1 class="text-lg text-white">Personal Details</h1>
            <div class="flex space-x-4">
                <x-input
                    type="text"
                    class="w-5/12"
                    name="name"
                    placeholder="Name"
                />
                <x-input
                    type="text"
                    class="w-5/12"
                    name="Surname"
                    placeholder="Surname"
                />
            </div>

            <div class="flex space-x-4">
                <x-input
                    type="email"
                    class="w-5/12"
                    name="email"
                    placeholder="Email"
                />
                <x-input
                    type="number"
                    class="w-5/12"
                    name="id_passport_no"
                    placeholder="ID/Passwrod Number"
                />
            </div>

            <div class="flex space-x-4">
                <x-input
                    type="phone"
                    class="w-5/12"
                    name="phone"
                    placeholder="Phone number"
                />
                <x-input
                    type="date"
                    class="w-5/12"
                    name="dob"
                    placeholder="date of birth"
                />
            </div>

            <h1 class="text-lg text-white">Address</h1>
            <div class="flex space-x-4">
                <x-input
                    class="w-5/12"
                    name="province"
                    placeholder="Province"
                />
                <x-input class="w-5/12" name="city" placeholder="City" />
            </div>
            <div class="flex space-x-4">
                <x-input
                    type="text"
                    class="w-5/12"
                    name="suburb"
                    placeholder="Suburb"
                />
                <x-input
                    type="text"
                    class="w-5/12"
                    name="street"
                    placeholder="Street"
                />
            </div>
            <div class="flex space-x-4">
                <x-input
                    type="number"
                    class="w-5/12"
                    name="unit_no"
                    placeholder="Unit number"
                />
                <x-input
                    type="number"
                    class="w-5/12"
                    placeholder="Postal code"
                    name="postal_code"
                />
            </div>
            <button class="text-lg text-white min-w-40 p-2 gradient3">Update</button>
        </form>
        <button
            class="w-full mt-20 p-4 bg-red-500 text-lg text-white"
            form="changePassword"
        >
            Click here to change your password
        </button>
         </div>
    </section>
</x-app-layout>
