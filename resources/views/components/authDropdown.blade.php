<button
    data-dropdown-toggle="auth_dropdown"
    class="transition-all hover:text-yellow-600 p-2 space-x-4"
>
    <i class="fas fa-user text-xl"></i>
    <span>
        {{auth()->user()->name}}
    </span>
</button>

<div

    id="auth_dropdown"
    class="z-10 hidden gradient2 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
>
    <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
        @canany(["is-seller", "is-admin"])
        <li>
            <a
                href="/app/analytic"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Dashboard</a
            >
        </li>
        @else
        <li>
            <a
                href="{{ route('buyer_status') }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Dashboard</a
            >
        </li>
        @endcanany
        <li>
            <a
                href="/app/settings"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Settings</a
            >
        </li>
        <li>
            <form class="hidden" id="logOutForm" action="/logout" method="post">
                @csrf
            </form>
            <button
                form="logOutForm"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
            >
                Sign out
            </button>
        </li>
    </ul>
</div>
