<x-app-layout>
    <section class="h-full w-full p-8 space-y-20">
        <div class="flex justify-center flex-wrap gap-12">
            <div
                class="h-20 w-60 select-none flex flex-col justify-center items-center text-white text-lg capitalize bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg"
            >
                <h1 class="text-3xl font-bold">4000</h1>

                <h1>Sellers</h1>
            </div>

            <div
                class="h-20 w-60 select-none flex flex-col justify-center items-center text-white text-lg capitalize bg-gradient-to-r from-red-500 to-orange rounded-lg"
            >
                <h1 class="text-3xl font-bold">R 40m</h1>
                <h1>Revenue this year</h1>
            </div>
            <div
                class="h-20 w-60 select-none flex flex-col justify-center items-center text-white text-lg capitalize bg-gradient-to-r from-purple-500 to-blue-500 rounded-lg"
            >
                <h1 class="text-3xl font-bold">4000</h1>

                <h1>vehicles listed this year</h1>
            </div>
            <div
                class="h-20 w-60 select-none flex flex-col justify-center items-center text-white text-lg capitalize bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg"
            >
                <h1 class="text-3xl font-bold">500</h1>

                <h1>Registed buyers</h1>
            </div>
            <div
                class="h-20 w-60 select-none flex flex-col justify-center items-center text-white text-lg capitalize bg-gradient-to-r from-orange to-yellow-500 rounded-lg"
            >
                <h1 class="text-3xl font-bold">50</h1>

                <h1>current live auctions</h1>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-12">
            <div class="h-80 w-full p-2 col-span-8 rounded-lg gradient2">
                <canvas
                    style="width: 100%; height: 100%"
                    id="monthly_list"
                ></canvas>
            </div>
            <div class="h-full w-full col-span-4 p-2 rounded-lg gradient2">
                <canvas
                  style="width: 100%; height: 100%"
                id="auctions_propotions"></canvas>
            </div>
        </div>

        <div class="rounded-lg h-80 gradient2 p-2">
            <canvas
                style="width: 100%; height: 100%"
                id="listing_trend"
            ></canvas>
        </div>

        <div class="rounded-lg h-80 gradient2 p-2">
            <canvas style="width: 100%; height: 100%" id="price_trend"></canvas>
        </div>
        <div class="rounded-lg h-80 gradient2 p-2">
            <canvas style="width: 100%; height: 100%" id="user_trend"></canvas>
        </div>
        <div class="h-12"></div>
    </section>
    <script>
        // load the graphs after the document is done loading
        window.onload = function () {
            let ele = document.getElementById("monthly_list");
            let props = document.getElementById("auctions_propotions");
            let lt = document.getElementById("listing_trend");
            let pt = document.getElementById("price_trend");
            let ut = document.getElementById("user_trend");
            createBar(ele);
            createDoughnut(props);
            createLine(lt);
            createScatter(pt);
            createBuble(ut);
        };
    </script>
</x-app-layout>
