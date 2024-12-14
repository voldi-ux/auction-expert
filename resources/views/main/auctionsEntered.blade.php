
<x-app-layout>
    <x-drawer
        drawer_id="live-auction-filter-drawer"
        title="Advanced Filtering"
    />
 
    <section class="p-8">
        <h1 class="text-3xl text-white mb-20">Your Auctions</h1>
        <div class="flex flex-wrap gap-8">
            @forelse ($auctions as $auction)
            <x-card.liveAdmin  :auction="$auction"/>
            @empty
            <x-nothingToShow msg="You are not partaking in any auction now." />
            @endforelse
        </div>
    </section>
</x-app-layout>
