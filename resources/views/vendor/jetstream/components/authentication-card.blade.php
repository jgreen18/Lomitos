<div class="flex flex-col md:flex-row h-screen items-center">
    <div class="h-screen hidden bg-blue-600 lg:block  md:w-1/2 xl:w-2/3 h-screen">
        <!--Logo de login-->
        {{-- {{ $logo }} --}}
        <img src="https://comoeducarauncachorro.com/blog/wp-content/uploads/2020/01/pexels-photo-1582835.jpeg"
            class="w-full h-full object-cover" alt="">
    </div>

    <div class="bg-white items-center justify-center flex md:mx-auto md:mx-0 md:max-w-md pt-32 lg:max-w-full w-full md:w-1/2 xl:w-1/3 px-6 lg:px-16 xl:px-12"><!--Diseño de la tarjeta-->
        <div class="w-full h-100">
            <h1 class="text-xl font-bold">Bienvenido a Lomito's House</h1>
            <h1 class="text-xl md:text-2x1 font-bold leading-tight my-6">Acceda a su cuenta</h1>
            {{ $slot }}
        </div>
    </div>
</div>
