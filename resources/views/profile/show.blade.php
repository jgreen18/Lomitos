<x-app-layout>
    <x-slot name="header">
        <ul id="tabs" class="inline-flex w-full px-1 pt-2 ">
            <li class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-blue-400 rounded-t">
                <a href="">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Perfil') }}
                    </h2>
                </a>
            </li>
            <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50">
                <a href="">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Mascotas') }}
                    </h2>
                </a>
            </li>
            <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50">
                <a href="">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Historial') }}
                    </h2>
                </a>
            </li>
        </ul>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
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
