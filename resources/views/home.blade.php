<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lomito's House</title>

    <!-- Styles -->
    @vite('resources/css/app.css', 'resouces/js/app.js')
    @livewireStyles

</head>

<body>
    <div class="">
        <x-app-layout>

        </x-app-layout>
    </div>

</body>

</html>
