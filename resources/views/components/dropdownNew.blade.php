<div class="flex justify-center">
    <div
        x-data="{
            open: false
        }"
        class="relative"
    >
        <!-- Button -->
        <button
            x-ref="button"
            @click="open = !open"
            type="button"
            class="flex items-center gap-2 bg-white px-5 py-2.5 rounded-md shadow"
        >
            Options
            <!-- Heroicon: chevron-down -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                 fill="currentColor">
                <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"/>
            </svg>
        </button>
        <!-- Panel -->
        <div
            x-ref="panel"
            x-show="open"
            x-transition.origin.top.left
            x-on:click.outside="close($refs.button)"
            :id="$id('dropdown-button')"
            class="absolute left-0 mt-2 w-40 rounded-md bg-white shadow-md"
        >
            <a href="#"
               class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                New Task
            </a>
            <a href="#"
               class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                Edit Task
            </a>
            <a href="#"
               class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                <span class="text-red-600">Delete Task</span>
            </a>
        </div>
    </div>
</div>
