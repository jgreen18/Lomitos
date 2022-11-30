<x-app-layout>
    <x-slot name="header">
        <div class="w-1/2 mt-4 rounded border-b-2">
            <ul id="tabs" class="inline-flex w-full px-1 pt-2">
                <li class="px-4 py-2 -mb-px font-semibold text-gray-800">
                    <a href="#first">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Perfil') }}
                        </h2>
                    </a>
                </li>
                <li class="px-4 py-2 font-semibold text-gray-800">
                    <a href="#second">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Mascotas') }}
                        </h2>
                        {{-- Agregar componente livewire aquí --}}

                    </a>
                </li>
                <li class="px-4 py-2 font-semibold text-gray-800">
                    <a href="#third">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Historial') }}
                        </h2>
                    </a>
                </li>
            </ul>
        </div>

        <div id="tab-contents">
            <div class="" id="first">
                <div>
                    <div id="first" class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                            @livewire('profile.update-profile-information-form')

                            <x-jet-section-border />
                        @endif

                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.update-password-form')
                            </div>

                            <x-jet-section-border />
                        @endif

                        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.two-factor-authentication-form')
                            </div>

                            <x-jet-section-border />
                        @endif

                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.logout-other-browser-sessions-form')
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                            <x-jet-section-border />

                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.delete-user-form')
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div id="second">
                @livewire('show-pets')
            </div>
            <div id="third">
                @livewire('show-historial-c')
            </div>
        </div>
    </x-slot>


</x-app-layout>
<script>
    let tabsContainer = document.querySelector("#tabs");

    let tabTogglers = tabsContainer.querySelectorAll("a");
    console.log(tabTogglers);

    tabTogglers.forEach(function(toggler) {
        toggler.addEventListener("click", function(e) {
            e.preventDefault();

            let tabName = this.getAttribute("href");

            let tabContents = document.querySelector("#tab-contents");

            for (let i = 0; i < tabContents.children.length; i++) {

                tabTogglers[i].parentElement.classList.remove("border-blue-400", "border-b", "-mb-px",
                    "opacity-100");
                tabContents.children[i].classList.remove("hidden");
                if ("#" + tabContents.children[i].id === tabName) {
                    continue;
                }
                tabContents.children[i].classList.add("hidden");

            }
            e.target.parentElement.classList.add("border-blue-400", "border-b-4", "-mb-px",
                "opacity-100");
        });
    });

    document.getElementById("default-tab").click();
</script>
