<x-app-layout>
    <section class="md:h-full flex items-center text-gray-600">
        <div class="container px-5 py-12 mx-auto">
            <div class="text-center mb-3">
                <h5 class="text-black font-semibold mt-4">Conoce a</h5>
                <h1 class="text-2xl text-black font-extrabold uppercase md:text-3x1 tracking-wider">Nuestro staff</h1>
            </div>
        </div>
    </section>
    <section class="md:h-full flex items-center">
        <div class="container px-5 py-6 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="p-4 sm:w-1/2 lg:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-sm overflow-hidden">
                        <img class="lg:h-72 md:h-48 w-full object-cover object-center"
                            src="{{URL::asset('/img/staff-k.jpeg')}}" alt="blog">
                        <div class="p-6 bg-white">
                            <h1 class="text-2xl font-semibold mb-3">¡Hola, me llamo Karen!</h1>
                            <p class="leading-relaxed mb-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Aperiam modi, expedita quos doloremque autem ipsum itaque incidunt ipsam reprehenderit
                                fuga! Dolores quisquam eius cum accusamus?</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 sm:w-1/2 lg:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-sm overflow-hidden">
                        <img class="lg:h-72 md:h-48 w-full object-cover object-center"
                            src="{{URL::asset('/img/staff-s.jpg')}}" alt="blog">
                        <div class="p-6 bg-white">
                            <h1 class="text-2xl font-semibold mb-3">¡Hola, me llamo Susana!</h1>
                            <p class="leading-relaxed mb-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Aperiam modi, expedita quos doloremque autem ipsum itaque incidunt ipsam reprehenderit
                                fuga! Dolores quisquam eius cum accusamus?</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 sm:w-1/2 lg:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-sm overflow-hidden">
                        <img class="lg:h-72 md:h-48 w-full object-cover object-center"
                            src="https://picsum.photos/id/1011/720/400" alt="blog">
                        <div class="p-6 bg-white">
                            <h1 class="text-2xl font-semibold mb-3">¡Hola, me llamo Mon!</h1>
                            <p class="leading-relaxed mb-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Aperiam modi, expedita quos doloremque autem ipsum itaque incidunt ipsam reprehenderit
                                fuga! Dolores quisquam eius cum accusamus?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
