<!doctype html>
<html lang="en">
<!-- START head.blade.php -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FAITH - Home</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>
<!-- END head.blade.php -->
<!-- START body -->
<body class="antialiased">
<header x-data="{ mobileNav: false }" class="bg-white">
    <div class="mt-7 lg:mt-5 w-full flex flex-col items-center md:gap-6">
        <div class="flex lg:hidden">
            <button @click="mobileNav = !mobileNav" type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                </svg>
            </button>
        </div>
        <a href="#" class="p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-96 w-auto" src="/images/faith_logo.svg" alt="">
        </a>
    </div>
    <nav class="mx-auto flex max-w-7xl justify-center p-6 lg:px-8" aria-label="Global">
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
                <!--
                  'Company' flyout menu, show/hide based on flyout menu state.

                  Entering: "transition ease-out duration-200"
                    From: "opacity-0 translate-y-1"
                    To: "opacity-100 translate-y-0"
                  Leaving: "transition ease-in duration-150"
                    From: "opacity-100 translate-y-0"
                    To: "opacity-0 translate-y-1"
                -->
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
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div x-show="mobileNav" class="lg:hidden" role="dialog"
         aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div @click="mobileNav = false"
             class="fixed inset-0 z-10 w-screen h-screen bg-gray-800 opacity-75 overflow-hidden"></div>
        <div
            class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                         alt="">
                </a>
                <button @click="mobileNav = false" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <div class="-mx-3">
                            <button type="button"
                                    class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                    aria-controls="disclosure-1" aria-expanded="false">
                                Product
                                <!--
                                  Expand/collapse icon, toggle classes based on menu open state.

                                  Open: "rotate-180", Closed: ""
                                -->
                                <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </button>
                            <!-- 'Product' sub-menu, show/hide based on menu state. -->
                            <div class="mt-2 space-y-2" id="disclosure-1">
                                <a href="#"
                                   class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Analytics</a>
                                <a href="#"
                                   class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Engagement</a>
                                <a href="#"
                                   class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Security</a>
                                <a href="#"
                                   class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Integrations</a>
                                <a href="#"
                                   class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Automations</a>
                                <a href="#"
                                   class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Watch
                                    demo</a>
                                <a href="#"
                                   class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact
                                    sales</a>
                            </div>
                        </div>
                        <a href="#"
                           class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                        <a href="#"
                           class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                        <div class="-mx-3">
                            <button type="button"
                                    class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                    aria-controls="disclosure-2" aria-expanded="false">
                                Company
                                <!--
                                  Expand/collapse icon, toggle classes based on menu open state.

                                  Open: "rotate-180", Closed: ""
                                -->
                                <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </button>
                            <!-- 'Company' sub-menu, show/hide based on menu state. -->
                            <div class="mt-2 space-y-2" id="disclosure-2">
                                <a href="#"
                                   class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">About
                                    us</a>
                                <a href="#"
                                   class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Careers</a>
                                <a href="#"
                                   class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Support</a>
                                <a href="#"
                                   class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Press</a>
                                <a href="#"
                                   class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Blog</a>
                            </div>
                        </div>
                    </div>
                    <div class="py-6">
                        <a href="#"
                           class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                            in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</body>
<!-- END body -->
</html>
