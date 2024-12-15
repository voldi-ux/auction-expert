 @if (session('message'))
        <x-toast :message="session('message')" />
@endif

<x-app-layout>
    <x-drawer drawer_id="sellers-filter-drawer" title="Filter Sellers">
        <h1>Filter sellers</h1>
    </x-drawer>

    <x-modal modal_id="create-seller" title="Add New Seller">
        
            <x-createSeller />
        
    </x-modal>

    <header class="py-2 px-8 space-y-4">
        <div class="flex justify-between">
            <span></span>
            <div class="text-white space-x-4">
                <!-- <button
                    class="border-2 p-1 border-gray"
                    data-drawer-target="sellers-filter-drawer"
                    data-drawer-show="sellers-filter-drawer"
                    data-drawer-placement="right"
                    aria-controls="sellers-filter-drawer  "
                >
                    <i class="fas fa-sort-amount-down-alt"></i>
                    <span> Filter </span>
                </button> -->

                <button
                    class="border-2 p-1 border-gray"
                    data-modal-target="create-seller"
                    data-modal-toggle="create-seller"
                    aria-controls="filter-drawer  "
                >
                    <i class="fas fa-plus"></i>
                    <span> Add new Seller </span>
                </button>
            </div>
        </div>

          <x-searchBar placeholder="Search name, email, etc..."/>
    </header>
    <section class="min-h-96 m-8  p-4 flex flex-col rounded-lg gradient2">
        <div class="relative overflow-x-auto flex-1 ">
            <table class="w-full text-sm text-left rtl:text-right">
                <thead class="text-white uppercase">
                    <tr>
                        <th scope="col" class="px-6 py-3">Details</th>
                        <th scope="col" class="px-6 py-3">Created Date</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>

                   @forelse($sellers as $seller)
                   <x-sellerTable.seller :seller="$seller"/>
                   @empty
                   <x-nothingToShow msg = "NO sellers"/>
                   @endforelse


                    
                </tbody>
            </table>
        </div>
        <div class="flex justify-center space-x-2 my-8 text-orange">
             {{$sellers->links()}}
        </div>
    </section>
</x-app-layout>
