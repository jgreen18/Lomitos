<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('/img/welcome/perro.png') }}">
    <link rel="stylesheet"
        href="{{ URL::asset('/vendor/fontawesome-free/fontawesome-free-6.2.1-web/css/all.min.css') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Styles -->
    <link rel="icon" type="image/jpg" href="" />
    <!--Agregar ruta-->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="h-full bg-white">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <footer>
        @livewire('footer')
    </footer>
    @stack('modals')

    @livewireScripts
    @stack('js')
    <script>
        livewire.on('alert', function() {
            Swal.fire(
                'Cita agendada exitosamente',
                '¡Gracias por su preferencia!',
                'success'
            )
        })
        livewire.on('alert2', function() {
            Swal.fire(
                'Información actualizada',
                '¡Gracias por su preferencia!',
                'success'
            )
        })
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
