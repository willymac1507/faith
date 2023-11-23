<x-app-layout>
    <div class="max-w-4xl xl:max-w-6xl mx-auto mt-8 pb-4">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-base font-semibold leading-6 text-gray-900">Pets</h1>
                    <p class="mt-2 text-sm text-gray-700">A list of all the pets currently registered with FAITH</p>
                </div>
                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                    <button type="button"
                            class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Add pet
                    </button>
                </div>
            </div>
            <div class="mt-8 flow-root">
                <div class="overflow-x-auto bg-white rounded-md border border-gray-500">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <table class="min-w-full p-6 divide-y divide-gray-300">
                            <thead>
                            <tr>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Name
                                </th>
                                <th scope="col"
                                    class="hidden md:block px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Age
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Status
                                </th>
                                <th scope="col"
                                    class="hidden md:block px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Registered On
                                </th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach($pets as $pet)
                                <tr>
                                    <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">

                                        <div>
                                            <div class="font-medium text-gray-900">{{ $pet->name }}</div>
                                            <div class="mt-1 text-gray-500">{{ ucfirst($pet->category) }}
                                                - {{ $pet->sex }}</div>
                                        </div>

                                    </td>
                                    <td class="hidden md:block whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                        <div class="text-gray-900">{{ $pet->age_years }} years</div>
                                        <div class="mt-1 text-gray-500">{{ $pet->age_months }} months</div>
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                        <x-status type="{{ strtolower($pet->status) }}">
                                            {{ $pet->status }}
                                        </x-status>
                                    </td>
                                    <td class="hidden md:block whitespace-nowrap px-3 py-5 text-sm text-gray-500">{{ \Carbon\Carbon::parse($pet->date_registered)->format('d/m/Y') }}</td>
                                    <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                        <a href="/pet/{{ $pet->id }}"
                                           class="text-indigo-600 hover:text-indigo-900">View</a>
                                    </td>
                                </tr>
                            @endforeach



                            <!-- More people... -->
                            </tbody>
                        </table>
                        {{ $pets->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
