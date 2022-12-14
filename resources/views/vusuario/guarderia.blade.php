<x-app-layout>
    <section class="md:h-full flex items-center text-gray-600">
        <div class="container px-5 py-6 mx-auto">
            <div class="text-center mb-12">
                <h5 class="text-base md:text-lg text-black font-semibold mb-1">¿Ocupado y no tienes quién cuide de tu
                    lomito Conoce nuestro</h5>
                <h1 class="text-3xl md:text-4xl text-black font-extrabold uppercase tracking-wider">Servicio de Guardería
                </h1>
            </div>
            <div class="max-w-2xl mx-auto">
                <div id="default-carousel" class="relative" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="overflow-hidden relative h-56 sm:h-64 xl:h-80 2xl:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-500 ease-in-out" data-carousel-item>
                            <span
                                class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First
                                Slide</span>
                            <img src="{{ URL::asset('/img/hyg/hg-3.jpeg') }}"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-500 ease-in-out" data-carousel-item>
                            <img src="{{ URL::asset('/img/hyg/hg-13.jpeg') }}"
                                class="block absolute top-3/4 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-500 ease-in-out" data-carousel-item>
                            <img src="{{ URL::asset('/img/hyg/hg-15.jpeg') }}"
                                class="block absolute top-2/3 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                            <span class="hidden">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            <span class="hidden">Next</span>
                        </span>
                    </button>
                    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
                </div>
                <div class="flex flex-col items-center">
                    <div class="my-5">
                        <p class="font-bold text-justify">
                            Regálale un día de diversión a tus lomitos en un horario de 8:00 a.m. a 7:00 p.m. disfrutando de la compañía de otros
                            perritos y sus nannys. Realizamos actividades para fomentar su desarrollo físico y mental
                            como juegar con la pelota, cuerdas, mordeduras, etc; además de momentos de descanso y
                            relajación.
                        </p>
                        <p class="font-bold text-justify text-lomito-primary">
                            <span>Nos adaptamos a las necesidades de cada perrito.</span> 
                        </p>
                    </div>
                    {{-- Agregue condicion --}}
                    @auth
                        @livewire('agguarderia')
                    @else
                        <x-jet-button wire:click="$set('open', true)">
                            <a href="{{ route('login') }}">Inicia sesion para agendar</a>
                        </x-jet-button>
                    @endauth
                </div>
            </div>
        </div>
    </section>
    {{-- @livewire('agendar-cita') --}}
</x-app-layout>
