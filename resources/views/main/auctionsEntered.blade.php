<x-app-layout>
    <section class="p-8">
        <div>
            
        </div>
        <h1 class="text-3xl text-white mb-20">Your Auctions</h1>
        <div class="flex flex-wrap gap-8">
            @forelse ($auctions as $auction)
            <x-card.entered :auction="$auction" />
            @empty
            <x-nothingToShow msg="You are not partaking in any auction now." />
            @endforelse
        </div>

        <div class="flex justify-center space-x-4 mt-20">
            {{$auctions->links()}}
        </div> 
    </section>
</x-app-layout>
