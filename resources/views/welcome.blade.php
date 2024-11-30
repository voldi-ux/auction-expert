<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>auction expert</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/js/app.js'])
    </head>
    <body class="font-sans  myBg ">
         <div class="flex flex-col h-screen">
            <nav class="flex text-white items-center justify-between px-10 ">
            <div class="w-40 ">
               <img src="/storage/images/logo.png"  />
            </div>

            <div class="space-x-4">
               <a class="text-lg hover:text-orange-500 transition-all" href="/login">Login</a>
               <a class="text-lg hover:text-orange-500 transition-all" href="/register">Register</a>
            </div>

            <div class="space-x-4 ">
               <a class="text-lg hover:text-orange-500 transition-all" href="/">Home</a>
               <a class="text-lg hover:text-orange-500 transition-all" href="">About</a>
               <a class="text-lg hover:text-orange-500 transition-all" href="">Contact</a>
            </div>
        </nav>
        <header class="flex-1  mx-auto container pb-4 flex flex-col">
                     <img src="/storage/images/hero.png" class="w-1/2  mx-auto animate-pulse" />
                 <div class=" mt-auto flex items-center"> 
                    <div class="h-1 flex-1 bg-gray-700"></div>
                    <div class="mx-2 w-16 h-16"> <img src="/storage/images/triangle.svg" class="animate-bounce" /></div>
                    <div class="h-1 flex-1 bg-gray-700"></div>
                 </div>
        </header>
    </div>
    <section class="my-8">
         <h1 class="text-4xl text-center font-semibold text-white uppercase">
             Current Auctions
         </h1>
         <div class="">
            <img src="/storage/images/cars.png" class="w-1/2 mx-auto" />
         </div>
         <div class="container mx-auto rounded-lg gradient2 pb-8 min-h-64">
        <table class="w-full border-separate border-spacing-y-8">
        <thead class="text-white font-semibold capitalize text-lg">
            <tr>
            <th ></th>
            <th >Name</th>
            <th >Model</th>
            <th >owner</th>
            <th >Top Bid</th>
            <th ></th>
            <th ></th>
            </tr>
        </thead>
        <tbody>

        <!-- This data should be replaced with one from the database -->
            <tr class="text-white">
            <td class=""> <img src="/storage/images/car1.png" class="w-16 mx-auto"/></td>
            <td class="">Mercdez Benz</td>
            <td class="">2019xr</td>
            <td class="">Voldi</td>
            <td class="">R200k</td>
            <td class="" ><button class="p-1 bg-white font-semibold text-black w-20 rounded-full">view</button></td>
            <td class="" ><button>Join</button></td>
            </tr>
            <tr class="text-white">
            <td class=""> <img src="/storage/images/car2.png" class="w-16 mx-auto"/></td>
            <td class="">Mercdez Benz</td>
            <td class="">2019xr</td>
            <td class="">Voldi</td>
            <td class="">R200k</td>
            <td class="" ><button class="p-1 bg-white font-semibold text-black w-20 rounded-full">view</button></td>
            <td class="" ><button>Join</button></td>
            </tr>
            <tr class="text-white">
            <td class=""> <img src="/storage/images/car5.png" class="w-16 mx-auto"/></td>
            <td class="">Mercdez Benz</td>
            <td class="">2019xr</td>
            <td class="">Voldi</td>
            <td class="">R200k</td>
            <td class="" ><button class="p-1 bg-white font-semibold text-black w-20 rounded-full">view</button></td>
            <td class="" ><button>Join</button></td>
            </tr>
            <tr class="text-white">
            <td class=""> <img src="/storage/images/car6.png" class="w-16 mx-auto"/></td>
            <td class="">Mercdez Benz</td>
            <td class="">2019xr</td>
            <td class="">Voldi</td>
            <td class="">R200k</td>
            <td class="" ><button class="p-1 bg-white font-semibold text-black w-20 rounded-full">view</button></td>
            <td class="" ><button>Join</button></td>
            </tr>
            <tr class="text-white">
            <td class=""> <img src="/storage/images/car4.png" class="w-16 mx-auto"/></td>
            <td class="">Mercdez Benz</td>
            <td class="">2019xr</td>
            <td class="">Voldi</td>
            <td class="">R200k</td>
            <td class="" ><button class="p-1 bg-white font-semibold text-black w-20 rounded-full">view</button></td>
            <td class="" ><button>Join</button></td>
            </tr>
        </tbody>
        </table>
          <div class="flex justify-center">
             <button class="p-1 bg-white font-semibold min-w-20 mx-2" >Previous</button>
             <button class="p-1 bg-white font-semibold min-w-20 mx-2">Next</button>
          </div>
         </div>
    </section>

    <section>
          <h1 class="text-4xl text-center font-semibold text-white my-20 uppercase">
             about
         </h1>
         <div class="container flex h-long mx-auto my-16">
             <div class="relative w-1/2 h-80  mr-8 ">
                <div class="w-80 h-full rounded-lg flex items-center justify-center  gradient2 block absolute top-0">
                    <img src="/storage/images/car1.png" class="h-40" />
                </div>
                  <div class=" w-80 h-full rounded-lg flex items-center justify-center  gradient2 block absolute top-60 left-40">
                    <img src="/storage/images/car2.png" class="h-40" />
                  </div>
             </div>
             <div class="">
                <p class="text-lg text-white my-4">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium, nihil. Deserunt numquam expedita fuga veniam, eos earum molestias quasi, voluptate dicta nesciunt soluta delectus id aliquid laboriosam doloribus quo nam?
                </p>
                <a href="" class="text-orange-600">Learn More</a>
             </div>
         </div>
    </section>
    <section >
            <h1 class="text-4xl text-center font-semibold text-white my-20 uppercase">
             Testimonials
           </h1>

           <div class="container mx-auto pb-8 flex justify-between flex-wrap">
                <div class="px-4  py-8 gradient2 rounded-lg w-60 h-80 flex flex-col">
                    <p class="text-lg text-white">
                        "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima amet laudantium tempora nostrum architecto alias? Eveniet, repellat culpa id ullam quos suscipit."
                    </p>
                    <div class="flex justify-between mt-auto items-center">
                        <h1 class="text-lg text-orange-700 font-semibold">
                            Jamie fox
                        </h1>

                        <h3 class="text-sm text-white">
                            20 October
                        </h3>
                    </div>
                </div>
                <div class="px-4  py-8 gradient2 rounded-lg w-60 h-80 flex flex-col">
                    <p class="text-lg text-white">
                        "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima amet laudantium tempora nostrum architecto alias? Eveniet, repellat culpa id ullam quos suscipit."
                    </p>
                    <div class="flex justify-between mt-auto items-center">
                        <h1 class="text-lg text-orange-700 font-semibold">
                            Jamie fox
                        </h1>

                        <h3 class="text-sm text-white">
                            20 October
                        </h3>
                    </div>
                </div>
                <div class="px-4  py-8 gradient2 rounded-lg w-60 h-80 flex flex-col ">
                    <p class="text-lg text-white">
                        "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima amet laudantium tempora nostrum architecto alias? Eveniet, repellat culpa id ullam quos suscipit."
                    </p>
                    <div class="flex justify-between mt-auto items-center">
                        <h1 class="text-lg text-orange-700 font-semibold">
                            Jamie fox
                        </h1>

                        <h3 class="text-sm text-white">
                            20 October
                        </h3>
                    </div>
                </div>
                <div class="px-4  py-8 gradient2 rounded-lg w-60 h-80 flex flex-col">
                    <p class="text-lg text-white">
                        "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima amet laudantium tempora nostrum architecto alias? Eveniet, repellat culpa id ullam quos suscipit."
                    </p>
                    <div class="flex justify-between mt-auto items-center">
                        <h1 class="text-lg text-orange-700 font-semibold">
                            Jamie fox
                        </h1>

                        <h3 class="text-sm text-white">
                            20 October
                        </h3>
                    </div>
                </div>
                <div class="px-4  py-8 gradient2 rounded-lg w-60 h-80 flex flex-col">
                    <p class="text-lg text-white">
                        "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima amet laudantium tempora nostrum architecto alias? Eveniet, repellat culpa id ullam quos suscipit."
                    </p>
                    <div class="flex justify-between mt-auto items-center">
                        <h1 class="text-lg text-orange-700 font-semibold">
                            Jamie fox
                        </h1>

                        <h3 class="text-sm text-white">
                            20 October
                        </h3>
                    </div>
                </div>
           </div>
    </section>
    <section>
        
     <h1 class="text-4xl text-center font-semibold text-white my-20 uppercase">
              Contact US
     </h1>
     
     <div class="container mx-auto pb-8">
          <div class="md:w-3/5 mx-auto rounded-lg gradient2 p-8">
             <form action="" class="flex flex-col space-y-4">
                <input class="border-0 border-b-2 bg-transparent h-8" type="text" placeholder="Name" >
                <input type="text" class="border-0 bg-transparent border-b-2  h-8" placeholder="Email" >
                <textarea name="message" class="border-0 border-b-2 h-40 bg-transparent" id="message" placeholder="Enter your message"></textarea>
                <button class="pd-4 bg-white text-black text-lg w-20 font-semibold self-center my-4" type="submit"> submit </button>
             </form>
          </div>
     </div>
    </section>

     <div class="gradient2">
    <footer class="container mx-auto flex flex-col items-center">
        <div><img src="/storage/images/logo.png" class="w-40"/> </div>
        <div class="flex justify-between w-full" >
            <ul class="text-lg text-white space-y-4">
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
            </ul>

            <div class="text-lg text-white ">
                <h1>Follow us </h1>
                <ul>
                   <li><a href="">Facebook</a></li>
                   <li><a href="">Instagram</a></li>
                   <li><a href=""> LinkedIn</a></li>
                </ul>
            </div>
        </div>
         <p class="text-lg text-orange-700">coypright &copy; 2024</p>
    </footer>
     </div>
    </body>
</html>
