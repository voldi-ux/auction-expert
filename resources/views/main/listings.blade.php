@if (session('message'))
<x-toast :message="session('message')" />
@endif @php $msg = "There’s currently no new car available. Please check back
later."; @endphp
<x-app-layout>
    <x-drawer drawer_id="listing-filter-drawer" title="Advanced Filtering">
        <form action="/" class="h-full">
            <x-advancedSearch />
        </form>
    </x-drawer>
    <header
        class="mx-auto container pb-20 space-y-8 flex flex-col w-full bg-[url('/storage/images/hero.png')] bg-center bg-contain bg-no-repeat p-8"
    >
        <x-searchBar.main></x-searchBar.main>

        <div class="flex items-center space-x-4">
            <div class="space-x-4 flex-1"></div>
            <span>
                <button
                    class="border-2 p-1 border-gray text-white"
                    data-drawer-target="listing-filter-drawer"
                    data-drawer-show="listing-filter-drawer"
                    data-drawer-placement="right"
                    aria-controls="listing-filter-drawer  "
                >
                    <i class="fas fa-sort-amount-down-alt"></i>
                    <span> Filter </span>
                </button>
            </span>
        </div>
    </header>
    <section class="p-8">
        <h1 class="text-3xl text-white mb-20">Listed Vehicles</h1>
        <div class="flex flex-wrap gap-8">
            @forelse ($listed_cars as $car)
            <x-card.listing :car="$car" />
            @empty
            <x-nothingToShow :msg="$msg" />
            @endforelse
        </div>
        <div class="flex justify-center my-12 text-orange">
            {{$listed_cars->links()}}
        </div>
    </section>
</x-app-layout>
