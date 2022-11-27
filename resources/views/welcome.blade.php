 <x-app-layout>
     <header>
         <div class="w-full bg-center bg-cover h-96"
             style="background-image:url(https://supercurioso.com/wp-content/uploads/2020/09/group-portrait-of-adorable-puppies-picture-id1094310798.jpg);">
             <div class="flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50">
                 <div class="text-center">
                     <h1 class="text-2xl text-white font-extrabold uppercase md:text-3x1 tracking-wider">
                         Bienvenidos a <span class="text-blue-300">Lomito's House</span>.
                     </h1>
                 </div>
             </div>
         </div>
     </header>

     <section class="px-3 py-5 bg-neutral-100 lg:py-10">
         <div class="grid lg:grid-cols-2 items-center justify-items-center gap-5">
             <div class="order-2 lg:order-1 flex flex-col justify-center items-center">
                 <p class="text-4xl font-bold md:text-7xl text-orange-600">Consentimos Lomitos</p>
                 <p class="text-4xl font-bold md:text-7xl">con los mejores</p>
                 <p class="mt-2 text-base md:text-2xl">productos y servicios</p>
             </div>
             <div class="order-1 lg:order-2">
                 <img class="h-80 w-80 object-cover lg:w-[500px] lg:h-[500px]"
                     src="https://scontent.flap2-1.fna.fbcdn.net/v/t39.30808-6/302692080_392694643036207_7172552220620638778_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=e3f864&_nc_ohc=fEKdvMUMy4wAX-7-6VN&_nc_ht=scontent.flap2-1.fna&oh=00_AfBWEoP2YxcJRV-MlHb5vm2r65SUUgsgTmOLHlKRW_eJ-g&oe=63886EFC"
                     alt="">
             </div>
         </div>
     </section>
     <section class="">
        @livewire('prueba')
     </section>
 </x-app-layout>
