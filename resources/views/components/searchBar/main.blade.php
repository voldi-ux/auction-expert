
<form class="w-full text-lg text-white space-y-4">
  <input type="hidden" name="search" value="true"/>
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full mb-5 group">
        <input type="text"  name="make" id="make" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="make" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Car Make </label>
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="model" id="model" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="model" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Car Model</label>
    </div>
  </div>
  <div class="grid md:grid-cols-2 md:gap-6">
    <x-select name="condition">
        <x-conditionsOptions />
    </x-select>
    
    <x-select name="sort">
        <x-sortOptions />
    </x-select>
    
  </div>
  
  <div class="flex space-x-4  justify-center "> 
      <button type="submit" class="w-40 hover:scale-105 transition-all text-white bg-blue-700  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm   px-5 py-2.5 text-center gradient2 ">Search</button>
  
      <button form="reset" type="submit" class="text-white hover:scale-105 transition-all  bg-blue-700  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-40  px-5 py-2.5 text-center  ">Reset filter</button>
  </div>
</form>
<form id ="reset" action="{{url()->current()}}" >
        
  </form>