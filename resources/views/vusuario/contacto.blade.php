<x-app-layout>

    <section>
        <div class="antialiased bg-cyan-100">
            <div class="flex w-full min-h-screen justify-center items-center">
                <div class="flex flex-col space-y-6 bg-lomito-secondary w-full max-w-4xl p-8 shadow-lg text-white">
                    <div class="flex flex-col space-y-8 justify-between">
                        <div>
                            <h1 class="font-blod text-4xl tracking-wide">
                                Contáctanos
                            </h1>
                            <p class="pt-2 text-cyan-100 text-sm">Ponemos a tu disposición las siguientes opciones para
                                que
                                te comuniques con nosotros</p>
                        </div>
                        <div class="flex flex-col space-y-6">
                            <div class="inline-flex space-x-2 items-center">
                                <ion-icon name="call" class="text-lomito-primary text-xl"></ion-icon>
                                <a href="callto:">
                                    <span>(+52) 612 107 8254</span>
                                </a>

                            </div>
                            <div class="inline-flex space-x-2 items-center">
                                <ion-icon name="mail" class="text-lomito-primary text-xl"></ion-icon>
                                <a href="mailto:lomitoshouse.lpz@gmail.com" target="_blank"">
                                    <span>lomitoshouse.lpz@gmail.com</span>
                                </a>

                            </div>
                            <div class="inline-flex space-x-2 items-center">
                                <ion-icon name="location" class="text-lomito-primary text-xl"></ion-icon>
                                <span>Estado 30 #33, col 8 de Octubre 1ra sección, La Paz, B.C.S.</span>
                            </div>
                        </div>
                        <div class="flex space-x-4 text-xl">
                            <a href="https://www.facebook.com/lomitos.house.lpz" target="_blank"">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>

                            <a href="https://www.instagram.com/lomitos.house.lpz/" target="_blank">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>

                            <a href="https://www.tiktok.com/@lomitoshouse.lpz?is_from_webapp=1&sender_device=pc"
                                target="_blank">
                                <ion-icon name="logo-tiktok"></ion-icon>
                            </a>

                            <a href="https://wa.me/526121078254" target="_blank">
                                <ion-icon name="logo-whatsapp"></ion-icon>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="bg-white shadow-md p-8">
                            @livewire('mapa')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
