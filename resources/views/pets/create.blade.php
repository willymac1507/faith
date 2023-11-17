<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add a pet') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <form action="{{ route('pet.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 dark:border-gray-200/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900 dark:text-gray-200">Profile</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be
                        careful what you share.</p>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="name"
                                   class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Pet's
                                Name</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="name" id="name" autocomplete="name"
                                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <label for="category"
                                   class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Category</label>
                            <div class="mt-2">
                                <select id="category" name="category" autocomplete="category"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-md sm:text-sm sm:leading-6">
                                    <option>Dog</option>
                                    <option>Cat</option>
                                    <option>Rabbit</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="description"
                                   class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">About</label>
                            <div class="mt-2">
                            <textarea id="description" name="description" rows="5"
                                      class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about the pet.</p>
                        </div>
                        <div class="col-span-full">
                            <label for="photos"
                                   class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Photos</label>
                            <div
                                class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 dark:border-gray-200/25 py-10">
                                <div class="text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                         aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                        <label for="file-upload"
                                               class="relative cursor-pointer rounded-md bg-white dark:bg-transparent font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        </label>
                                        <input id="file-upload" name="file-upload" type="file"
                                               multiple>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                <div class="border-b border-gray-900/10 pb-12">--}}
                {{--                    <h2 class="text-base font-semibold leading-7 text-gray-900 dark:text-gray-200">Personal--}}
                {{--                        Information</h2>--}}
                {{--                    <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive--}}
                {{--                        mail.</p>--}}
                {{--                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">--}}
                {{--                        <div class="sm:col-span-3">--}}
                {{--                            <label for="first-name"--}}
                {{--                                   class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">First--}}
                {{--                                name</label>--}}
                {{--                            <div class="mt-2">--}}
                {{--                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"--}}
                {{--                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-gray-200 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="sm:col-span-3">--}}
                {{--                            <label for="last-name"--}}
                {{--                                   class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Last--}}
                {{--                                name</label>--}}
                {{--                            <div class="mt-2">--}}
                {{--                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"--}}
                {{--                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-gray-200 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="sm:col-span-4">--}}
                {{--                            <label for="email"--}}
                {{--                                   class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Email--}}
                {{--                                address</label>--}}
                {{--                            <div class="mt-2">--}}
                {{--                                <input id="email" name="email" type="email" autocomplete="email"--}}
                {{--                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-gray-200 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="sm:col-span-3">--}}
                {{--                            <label for="country"--}}
                {{--                                   class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Country</label>--}}
                {{--                            <div class="mt-2">--}}
                {{--                                <select id="country" name="country" autocomplete="country-name"--}}
                {{--                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-gray-200 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">--}}
                {{--                                    <option>United States</option>--}}
                {{--                                    <option>Canada</option>--}}
                {{--                                    <option>Mexico</option>--}}
                {{--                                </select>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="col-span-full">--}}
                {{--                            <label for="street-address"--}}
                {{--                                   class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Street--}}
                {{--                                address</label>--}}
                {{--                            <div class="mt-2">--}}
                {{--                                <input type="text" name="street-address" id="street-address"--}}
                {{--                                       autocomplete="street-address"--}}
                {{--                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-gray-200 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="sm:col-span-2 sm:col-start-1">--}}
                {{--                            <label for="city"--}}
                {{--                                   class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">City</label>--}}
                {{--                            <div class="mt-2">--}}
                {{--                                <input type="text" name="city" id="city" autocomplete="address-level2"--}}
                {{--                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-gray-200 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="sm:col-span-2">--}}
                {{--                            <label for="region"--}}
                {{--                                   class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">State /--}}
                {{--                                Province</label>--}}
                {{--                            <div class="mt-2">--}}
                {{--                                <input type="text" name="region" id="region" autocomplete="address-level1"--}}
                {{--                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-gray-200 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="sm:col-span-2">--}}
                {{--                            <label for="postal-code"--}}
                {{--                                   class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">ZIP /--}}
                {{--                                Postal--}}
                {{--                                code</label>--}}
                {{--                            <div class="mt-2">--}}
                {{--                                <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"--}}
                {{--                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-gray-200 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="border-b border-gray-900/10 pb-12">--}}
                {{--                    <h2 class="text-base font-semibold leading-7 text-gray-900 dark:text-gray-200">Notifications</h2>--}}
                {{--                    <p class="mt-1 text-sm leading-6 text-gray-600">We'll always let you know about important changes,--}}
                {{--                        but--}}
                {{--                        you pick what else you want to hear about.</p>--}}
                {{--                    <div class="mt-10 space-y-10">--}}
                {{--                        <fieldset>--}}
                {{--                            <legend class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-200">By Email--}}
                {{--                            </legend>--}}
                {{--                            <div class="mt-6 space-y-6">--}}
                {{--                                <div class="relative flex gap-x-3">--}}
                {{--                                    <div class="flex h-6 items-center">--}}
                {{--                                        <input id="comments" name="comments" type="checkbox"--}}
                {{--                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">--}}
                {{--                                    </div>--}}
                {{--                                    <div class="text-sm leading-6">--}}
                {{--                                        <label for="comments" class="font-medium text-gray-900 dark:text-gray-200">Comments</label>--}}
                {{--                                        <p class="text-gray-500">Get notified when someones posts a comment on a--}}
                {{--                                            posting.</p>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="relative flex gap-x-3">--}}
                {{--                                    <div class="flex h-6 items-center">--}}
                {{--                                        <input id="candidates" name="candidates" type="checkbox"--}}
                {{--                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">--}}
                {{--                                    </div>--}}
                {{--                                    <div class="text-sm leading-6">--}}
                {{--                                        <label for="candidates" class="font-medium text-gray-900 dark:text-gray-200">Candidates</label>--}}
                {{--                                        <p class="text-gray-500">Get notified when a candidate applies for a job.</p>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="relative flex gap-x-3">--}}
                {{--                                    <div class="flex h-6 items-center">--}}
                {{--                                        <input id="offers" name="offers" type="checkbox"--}}
                {{--                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">--}}
                {{--                                    </div>--}}
                {{--                                    <div class="text-sm leading-6">--}}
                {{--                                        <label for="offers"--}}
                {{--                                               class="font-medium text-gray-900 dark:text-gray-200">Offers</label>--}}
                {{--                                        <p class="text-gray-500">Get notified when a candidate accepts or rejects an--}}
                {{--                                            offer.</p>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </fieldset>--}}
                <fieldset>
                    <legend class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-200">Pet Availability
                    </legend>
                    <p class="mt-1 text-sm leading-6 text-gray-600">This will determine whether the pet is visible in
                        the 'pets available for adoption' section of the site.</p>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="available" name="status" type="radio"
                                   class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="available"
                                   class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Available
                                for adoption</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="reserved" name="status" type="radio"
                                   class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="reserved"
                                   class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Has been
                                reserved</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="adopted" name="status" type="radio"
                                   class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="adopted"
                                   class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Has been
                                adopted</label>
                        </div>
                    </div>
                </fieldset>
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900 dark:text-gray-200">
                        Cancel
                    </button>
                    <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Save
                    </button>
                </div>
        </form>
    </div>
</x-app-layout>
