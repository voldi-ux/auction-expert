@php $user = auth()->user(); @endphp

<x-app-layout>
    <section class="min-h-90 gradient2 m-8 p-8 space-y-8">
        <header
            class="h-40 bg-center p-4 bg-cover bg-[url('/storage/images/bg-2.jpg')] text-white space-y-4"
        >
            <h1 class="text-4xl font-semibold">Hello, {{$user->name}}</h1>
            <p class="text-lg font-semibold">
                Make Sure You Follow all the Steps bellow before you You can
                start participating in auctions
            </p>
        </header>
        <div
            class="flex items-center p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800"
            role="alert"
        >
            <svg
                class="flex-shrink-0 inline w-4 h-4 me-3"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 20"
            >
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"
                />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Warning alert!</span> You have not
                completed all of the steps bellow.
            </div>
        </div>
        <div>
            <h1 class="text-2xl text-white mb-4">Steps</h1>
            <ol class="spac-y-4 text-lg text-white list-decimal list-inside">
                <li>Complete Your Profile Section</li>
                <li>Upload All required documents</li>
                <li>Wait for us to verify your details</li>
            </ol>
        </div>
    </section>
</x-app-layout>
