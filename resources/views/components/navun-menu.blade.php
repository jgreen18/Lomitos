<nav x-data="{ open: false }" class="bg-blue-500 shadow-lg">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" /><!--Poner logo de lomitos aquí-->
                        <x-jet-nav-link href="{{ route('inicio') }}" :active="request()->routeIs('inicio')">
                            {{ config('app.name', 'Laravel') }}
                        </x-jet-nav-link>

                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    
                    <x-jet-nav-link>
                        Nosotros
                    </x-jet-nav-link>
                    <x-jet-nav-link>
                        Staff
                    </x-jet-nav-link>
                    <x-jet-nav-link>
                        Servicios
                    </x-jet-nav-link>
                    <x-jet-nav-link>
                        Prueba de comportamiento
                    </x-jet-nav-link>
                    <x-jet-nav-link>
                        Contacto
                    </x-jet-nav-link>
                    <x-jet-nav-link>     
                        <a href="{{ route('login') }}" class="text-sm text-white font-bold hover:text-gray-700 pt-6">Iniciar sesión</a>
                    </x-jet-nav-link>


                </div>
            </div>

         

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link>
                Nosotros
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link>
                Staff
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link>
                Servicios
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link>
                Prueba de comportamiento
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link>
                Contacto
            </x-jet-responsive-nav-link>
        </div>

       
    </div>
</nav>
