<x-app-layout>
    <x-drawer drawer_id="listed-filter-drawer" title="Advanced Filtering">
        <form action="{{route('listed')}}" class="h-full">
            <x-advancedSearch />
            <input type="hidden" name="advanced" value="true"/>
        </form>
    </x-drawer>
    <header
        class="mx-auto container pb-20 space-y-8 flex flex-col w-full bg-[url('/storage/images/hero.png')] bg-center bg-contain bg-no-repeat p-8"
    >

        <div class="flex items-center space-x-4">
            <h1 class="text-lg text-white">Filter</h1>
            <div class="space-x-4 flex-1">
                <form id="all" action="{{route('listed')}}">
                </form>
                <form id="declined" action="{{route('listed')}}">
                    <input type="hidden" value="declined" name="status"/>
                    <input type="hidden" value="true" name="filter"/>
                </form>
                <form id="active" action="{{route('listed')}}">
                    <input type="hidden" value="true" name="filter"/>
                    <input type="hidden" value="active" name="status"/>
                </form>
                <form id="done" action="{{route('listed')}}">
                    <input type="hidden" value="true" name="filter"/>
                    <input type="hidden" value="done" name="status"/>
                </form>
                <form id="pending" action="{{route('listed')}}">
                    <input type="hidden" value="true" name="filter"/>
                    <input type="hidden" value="pending" name="status"/>
                </form>
                <form id="scheduled" action="{{route('listed')}}">
                    <input type="hidden" value="true" name="filter"/>
                    <input type="hidden" value="scheduled" name="status"/>
                </form>

                <button
                    form="all"
                    class=" {{request()->query('status') == '' ? 'bg-orange':'gradient2'}} p-2 min-w-40 hover:scale-105 transition-all text-lg text-white  rounded-lg"
                >
                   All 

                   </button>

                <button
                    form="pending"
                    class=" {{request()->query('status') == 'pending' ? 'bg-orange':'gradient2'}} p-2 min-w-40 hover:scale-105 transition-all text-lg text-white  rounded-lg"
                >
                    Pending
                </button>
                <button
                    form="declined"
                    class=" {{request()->query('status') == 'declined' ? 'bg-orange':'gradient2'}} p-2 min-w-40 hover:scale-105 transition-all text-lg text-white  rounded-lg"
                >
                    Declined
                </button>
                <button
                     form="active"
                    class=" {{request()->query('status') == 'active' ? 'bg-orange':'gradient2'}} p-2 min-w-40 hover:scale-105 transition-all text-lg text-white  rounded-lg"
                >
                    live
                </button>

                <button
                    form="scheduled"
                    class=" {{request()->query('status') == 'scheduled' ? 'bg-orange':'gradient2'}} p-2 min-w-40 hover:scale-105 transition-all text-lg text-white  rounded-lg"
                >
                    Scheduled
                </button>

                <button
                    form="done"
                    class=" {{request()->query('status') == 'done' ? 'bg-orange':'gradient2'}} p-2 min-w-40 hover:scale-105 transition-all text-lg text-white  rounded-lg"
                >
                    Completed
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
                    <span>Advanced Filter </span>
                </button>
            </span>
        </div>
    </header>
    <section class="p-8">
        <h1 class="text-3xl text-white mb-20">Listed Vehicles</h1>
        <div class="flex flex-wrap gap-8 justify-center">
            @forelse($cars as $car)
            <x-card.listed :car="$car" />
            @empty
            <x-nothingToShow msg="No listed Vehicle found" />
            @endforelse
        </div>
        <div class="flex justify-center my-20 text-orange">
            {{$cars->links()}}
        </div>
    </section>
</x-app-layout>
