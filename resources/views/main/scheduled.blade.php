<x-app-layout>
    <x-drawer drawer_id="listed-filter-drawer" title="Advanced Filtering" />
    <header
        class="mx-auto container pb-20 space-y-8 flex flex-col w-full bg-[url('/storage/images/hero.png')] bg-center bg-contain bg-no-repeat p-8"
    >
        <x-searchBar placeholder="Search make, model, etc..." />

        <div class="flex items-center space-x-4">
            <h1 class="text-lg text-white">Sort Order</h1>
            <div class="space-x-4 flex-1">
                <button
                    class="p-2 min-w-40 text-lg text-white gradient2 rounded-lg"
                >
                    Newly listed first
                </button>
                <button
                    class="p-2 min-w-40 text-lg text-white gradient2 rounded-lg"
                >
                    Oldest first
                </button>
            </div>
            <span>
                <button
                    class="border-2 p-1 border-gray text-white"
                    data-drawer-target="listed-filter-drawer"
                    data-drawer-show="listed-filter-drawer"
                    data-drawer-placement="right"
                    aria-controls="listed-filter-drawer  "
                >
                    <i class="fas fa-sort-amount-down-alt"></i>
                    <span> Filter </span>
                </button>
            </span>
        </div>
    </header>
    <section class="p-8">
        <h1 class="text-3xl text-white mb-20">Scheduled Vehicles</h1>
        <div class="flex flex-wrap gap-8">
            @forelse($scheduled_auctions as $auction)
            <x-card.scheduled :is_dashboard="true" :auction="$auction" />
            @empty
            <x-nothingToShow msg="No auction has been scheduled yet" />
            @endforelse
        </div>

        <div class="flex justify-center my-8">
            {{$scheduled_auctions->links()}}
        </div>
    </section>
</x-app-layout>
