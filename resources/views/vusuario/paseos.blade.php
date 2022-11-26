<x-app-layout>
    <section class="md:h-full flex items-center text-gray-600">
        <div class="container px-5 py-12 mx-auto">
            <div class="text-center mb-12">
                <h5 class="text-base md:text-lg text-indigo-700 mb-1">Conoce nuestro</h5>
                <h1 class="text-4xl md:text-6xl text-gray-700 font-semibold">Servicio de paseos</h1>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://www.laut.de/System-Of-A-Down/system-of-a-down-158702.jpg" class="shadow-lg"
                    width="500" alt="">
                <div class="my-5">
                    <p class="font-bold text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque praesentium provident esse
                        odio. Sint quam necessitatibus a incidunt laboriosam cum, culpa iusto sit, assumenda vel earum
                        ducimus, fugit reprehenderit voluptatum. Quibusdam exercitationem corrupti, hic optio officiis
                        at laborum sequi, repellat vitae dolores molestias eius eveniet quo enim voluptatum omnis rem.
                    </p>
                    <p class="font-bold text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro suscipit repudiandae at quae
                        reiciendis doloremque veritatis enim nostrum placeat facere labore, nesciunt in quaerat
                        excepturi eum expedita eius velit eligendi explicabo ipsam? Animi fuga ex omnis vel cum numquam
                        tempore excepturi, fugit placeat nostrum aut accusantium, culpa, vitae a corrupti.
                    </p>
                </div>
                @livewire('agendar-cita')
            </div>
        </div>
    </section>
    {{-- @livewire('agendar-cita') --}}
</x-app-layout>