<nav {{ $attributes->class(['mx-auto flex max-w-7xl justify-center p-6 lg:px-8']) }} aria-label="Global">
    <div class="hidden lg:w-full lg:flex lg:justify-center lg:gap-x-12">
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">About FAITH</a>
        <div x-data="{ open: false }" class="relative">
            <button @click="open = ! open" type="button"
                    class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                    aria-expanded="false">
                Adopting
                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                     aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                          clip-rule="evenodd"/>
                </svg>
            </button>
            <div x-show="open" x-transition @click.outside="open = false"
                 class="absolute -left-8 top-full z-10 mt-3 w-64 rounded-xl bg-white p-2 shadow-lg ring-1 ring-gray-900/5">
                <a href="#"
                   class="block rounded-lg px-3 py-2 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-50">How
                    to adopt an animal</a>
                <a href="#"
                   class="block rounded-lg px-3 py-2 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-50">Animals
                    available for adoption</a>
                <a href="#"
                   class="block rounded-lg px-3 py-2 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-50">Adoption
                    application forms</a>
            </div>
        </div>
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" type="button"
                    class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                    aria-expanded="false">
                Re-homing
                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                     aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                          clip-rule="evenodd"/>
                </svg>
            </button>
            <div x-show="open" x-transition @click.outside="open = false"
                 class="absolute -left-8 top-full z-10 mt-3 w-72 rounded-xl bg-white p-2 shadow-lg ring-1 ring-gray-900/5">
                <a href="#"
                   class="block rounded-lg px-3 py-2 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-50">I
                    need to re-home my animal</a>
                <a href="#"
                   class="block rounded-lg px-3 py-2 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-50">Animals
                    we have re-homed</a>
            </div>
        </div>
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" type="button"
                    class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                    aria-expanded="false">
                Get involved
                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                     aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                          clip-rule="evenodd"/>
                </svg>
            </button>
            <div x-show="open" x-transition @click.outside="open = false"
                 class="absolute -left-8 top-full z-10 mt-3 w-72 rounded-xl bg-white p-2 shadow-lg ring-1 ring-gray-900/5">
                <a href="#"
                   class="block rounded-lg px-3 py-2 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-50">Volunteering
                    at FAITH</a>
                <a href="#"
                   class="block rounded-lg px-3 py-2 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-50">Newsletter</a>
                <a href="#"
                   class="block rounded-lg px-3 py-2 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-50">Donate</a>
                <a href="#"
                   class="block rounded-lg px-3 py-2 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-50">Raffle</a>
            </div>
        </div>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Campaigns</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Contact</a>
    </div>
</nav>
