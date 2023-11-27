<x-app-layout>
    <div class="max-w-4xl xl:max-w-6xl mx-auto mt-8 pb-4">
        <div class="overflow-hidden bg-white shadow sm:rounded-lg mb-4">
            <div class="flex justify-between items-center">
                <div class="px-4 py-6 sm:px-6">
                    <h3 class="text-base font-semibold leading-7 text-gray-900">Pet Information</h3>
                    <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details and images.</p>
                </div>
                <div class="ml-auto pr-4 text-2xl text-gray-900">
                    <a href="/pet/{{ $pet->id }}/edit">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                </div>
            </div>
            <div class="border-t border-gray-100">
                <dl class="divide-y divide-gray-100">
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-900">Name</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $pet->name }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-900">Category</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ ucfirst($pet->category) }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-900">Sex</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ ucfirst($pet->sex) }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-900">Age</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                            {{ $pet->age_years }} year(s), {{ $pet->age_months }} month(s).
                        </dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-900">Status</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                            <x-status type="{{ strtolower($pet->status) }}">{{ $pet->status }}</x-status>
                        </dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-900">About</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                            {{ $pet->description }}
                        </dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Images</dt>
                        <dd class="mt-2 text-sm text-gray-900 sm:col-span-4 sm:mt-0">
                            <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                                @if(count($images) > 0)
                                    @foreach($images as $image)
                                        <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                            <div class="flex w-0 flex-1 basis-2/3 items-center">
                                                <img src="{{ asset('storage/'.explode("/", $image->url, 2)[1]) }}"
                                                     alt="thumbnail"
                                                     width="100px"
                                                     class="rounded-lg">
                                                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                    <span
                                                        class="hidden md:block truncate font-medium">{{ explode("/", $image->url, 3)[2] }}</span>
                                                    <span
                                                        class="hidden md:block flex-shrink-0 text-gray-400 ml-2">{{ ($image->size) / 1024 }} KB</span>
                                                </div>
                                            </div>
                                            <div class="ml-4 flex-shrink-0">
                                                @if($image->cover)
                                                    <span class="font-medium text-green-500">Cover Image</span>
                                                @endif
                                            </div>
                                        </li>
                                    @endforeach
                                @else
                                    <div class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                        <div class="flex w-0 flex-1 items-center">
                                            No images yet for {{$pet->name}}
                                        </div>
                                    </div>
                                @endif
                            </ul>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</x-app-layout>
