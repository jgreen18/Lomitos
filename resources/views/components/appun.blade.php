<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-blue-400">
        {{-- @livewire('navun-menu') --}}
        <x-navun-menu></x-navun-menu>
        {{-- Convertir a livewire lo de arriba --}}

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif
        <header>
            <div class="container m-auto">
                <div class="min-w-full h-400  mb-24 relative">
                    <img src="https://scontent.flap2-1.fna.fbcdn.net/v/t39.30808-6/302692080_392694643036207_7172552220620638778_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeGYlpu8sMw7fRxtUey2WdDe5zAWz578-T3nMBbPnvz5PXzlnXd_VhruK0KTruRxZsbv9hJBdx4-r6wmoMGoDakR&_nc_ohc=vdjZoWgwn-wAX972M8J&_nc_ht=scontent.flap2-1.fna&oh=00_AfAUUlH-WFRKNenxMDBwRr0bq878lc7W7tiF0u3BInib8w&oe=638085FC"
                        class="image bg-cover bg-center mx-56 shadow-lg mt-3" alt="">
                </div>
            </div>
        </header>
        <!-- Page Content -->
        <section>
            <div class="">

            </div>
        </section>
        <main>
            {{ $slot }}
        </main>



        <footer>

        </footer>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
