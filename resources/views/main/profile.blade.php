<x-app-layout>
   <section class="p-8 h-full">
    
               <form id="changePassword" action="/change-password">
                   
               </form>

      <form action=""  class="w-full min-h-long p-4 gradient2 space-y-12 rounded-lg">
          <div class="flex flex w-full space-x-4 text-lg text-white">
                <div class="space-y-8 flex  flex-col md:w-1/2">
                    <input type="text"  class="border-slate-700 border-0 border-b-2 bg-transparent h-8" name="Name" placeholder="Your name"/>
                    <input type="text"  class="border-slate-700 border-0 border-b-2 bg-transparent h-8" name="surname" placeholder="Surname"/>
                    <input type="text"  class="border-slate-700 border-0 border-b-2 bg-transparent h-8" disabled value="fixedemail@example.com" name="email" placeholder="Car Milage"/>
                </div>
            <div class="space-y-8 flex flex-col md:w-1/2">
                <input type="text"  class="border-slate-700 border-0 border-b-2 bg-transparent h-8" name="gender" placeholder="Car Brand" disabled value="Male"/>
                <input type="text"  class="border-slate-700 border-0 border-b-2 bg-transparent h-8" name="occupation" placeholder="Your occupation"/>
            </div>
        </div>
        <button class="mx-auto bg-white min-w-20 p-2 font-semibold text-lg capitalize block">save profile</button>
          <button class="w-full p-4 bg-red-400 text-lg text-white" form="changePassword" >Click here to change your password</button>
      </form>
   </section>
</x-app-layout>