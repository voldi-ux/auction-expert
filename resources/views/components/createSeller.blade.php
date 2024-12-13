<form
    class="space-y-8 p-2"
    action="{{ route('create_seller') }}"
    method="post"
    enctype="multipart/form-data"
>  
    @CSRF
    <h1 class="text-lg text-white">Personal Details</h1>
    <div class="flex space-x-4">
        <x-input 
          value="voldi"
        type="text" class="w-5/12" name="name" placeholder="Name" />
        <x-input
             value="voldi"
            type="text"
            class="w-5/12"
            name="surname"
            placeholder="Surname"
        />
    </div>

    <div class="flex space-x-4">
        <x-input 
           value="voldi@gmail.com"
        type="email" class="w-5/12" name="email" placeholder="Email" />
        <x-input
            value="2"
            type="number"
            class="w-5/12"
            name="identity_no"
            placeholder="ID/Passwrod Number"
        />
    </div>

    <div class="flex space-x-4">
        <x-input
         value="0629114175"
            type="phone"
            class="w-5/12"
            name="phone"
            placeholder="Phone number"
        />
        <x-input
             value="2024/11/12"
            type="date"
            class="w-5/12"
            name="dob"
            placeholder="date of birth"
        />
    </div>

    <h1 class="text-lg text-white">Address</h1>
    <div class="flex space-x-4">
        <x-input  type="text" value="Gauteng" class="w-5/12" name="province" placeholder="Province" />
        <x-input value="JHB" type="text" class="w-5/12" name="city" placeholder="City" />
    </div>
    <div class="flex space-x-4">
        <x-input
           value="Auckland Park"
            type="text"
            class="w-5/12"
            name="suburb"
            placeholder="Suburb"
        />
        <x-input
             value="Richmond Ave"
            type="text"
            class="w-5/12"
            name="street"
            placeholder="Street"
        />
    </div>
    <div class="flex space-x-4">
        <x-input
             value="3034"
            type="number"
            class="w-5/12"
            name="unit_no"
            placeholder="Unit number"
        />
        <x-input
            value="3034"
            type="number"
            class="w-5/12"
            placeholder="Postal code"
            name="postal_code"
        />
    </div>

    <label class="block mb-2 text-lg text-white" for="file_input"
        >Upload ID/Passport document</label
    >
    <input
        name="identity"
        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        aria-describedby="file_input_help"
        id="file_input"
        type="file"
    />
    <p class="mt-1 text-white" id="file_input_help">
        PNG, JPG or pdf (MAX size. 2mb).
    </p>
    <button
        type="submit"
        class="p-2 w-40 text-center text-lg gradient3 text-white my-4"
    >
        Create Seller
    </button>
</form>

