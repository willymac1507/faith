<x-app-layout>
    <div
        class="max-w-4xl xl:max-w-6xl mx-auto mt-8 pb-4">
        <form action="/pet/{{ $pet->id }}/edit" method="post"
              class="overflow-hidden bg-white shadow sm:rounded-lg mb-4">
            @csrf
            <div class="flex justify-between items-center">
                <div class="px-4 py-6 sm:px-6">
                    <h3 class="text-base font-semibold leading-7 text-gray-900">Pet Information</h3>
                    <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details and images.</p>
                </div>
                <div class="ml-auto pr-4 text-2xl text-gray-900">
                    <button type="submit">
                        <i class="fa-regular fa-floppy-disk"></i>
                    </button>
                </div>
            </div>
            <div class="border-t border-gray-100">
                <dl class="divide-y divide-gray-100">
                    <x-edit-form-input name="name" label="Name" type="text" :value="$pet->name"/>
                    <x-edit-form-input name="category" label="Category" type="text" :value="ucfirst($pet->category)"/>
                    <x-edit-form-select name="sex" label="Sex" :value="$pet->sex" :options="['male', 'female']"/>
                    <x-edit-form-input name="age_years" label="Years" type="number" :value="$pet->age_years"/>
                    <x-edit-form-input name="age_months" label="Months" type="number" :value="$pet->age_months"/>
                    <x-edit-form-select name="status" label="Status" :value="$pet->status"
                                        :options="['available', 'adopted', 'reserved']"/>
                    <x-edit-form-textarea name="description" label="About" :value="$pet->description"/>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-4 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Images</dt>
                        <div class="ml-auto text-sm col-start-4 flex-shrink-0 pr-4">
                                            <span
                                                @click="
                                                imageUploader = !imageUploader;
                                                (!imageUploader ? location.reload(): '');
                                                "
                                                class="cursor-pointer font-medium text-indigo-600 hover:text-indigo-500"
                                                x-text="(imageUploader ? 'Close Uploader' : 'Add Images')"/>
                        </div>
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
                                                @else
                                                    <a href="/pet/{{ $pet->id }}/{{ $image->id }}/cover"
                                                       class="font-medium text-indigo-600 hover:text-indigo-500">Make
                                                        Cover
                                                        Image</a>
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
        </form>
        <div x-transition x-show="imageUploader" class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="px-4 py-6 sm:px-6">
                <h3 class="text-base font-semibold leading-7 text-gray-900">Image Uploader</h3>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500 mb-6">These images will be viewable
                    on the public area of the site</p>
                <x-image-uploader id="{{ $pet->id }}"/>
            </div>
        </div>
    </div>
</x-app-layout>
