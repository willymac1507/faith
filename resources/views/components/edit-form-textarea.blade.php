@props([
    'name',
    'value',
])
<div {{ $attributes->class(['px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6']) }}>
    <label for="{{ $name }}"
           class="flex items-center text-sm font-medium text-gray-900">{{ ucfirst($name) }}</label>
    <textarea id="{{ $name }}"
              name="{{ $name }}"
              rows="4"
              class="rounded-lg bg-gray-100 border-gray-300 mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"
              required>{{ $value }}</textarea>
    @error($name)
    <span class="text-xs">{{ $message }}</span>
    @enderror
</div>
