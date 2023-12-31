@props([
    'name',
    'value',
    'options',
    'label'
])
<div {{ $attributes->class(['px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6']) }}>
    <label for="{{ $name }}"
           class="flex items-center text-sm font-medium text-gray-900">{{ $label }}</label>
    <select id="{{ $name }}"
            name="{{ $name }}"
            class="rounded-lg bg-gray-100 border-gray-300 mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"
            required>
        @foreach($options as $option)
            <option :value="{{ $option }}" :selected="{{ $value === $option }}">{{ $option }}</option>
        @endforeach
    </select>
    @error($name)
    <span class="text-xs">{{ $message }}</span>
    @enderror
</div>
