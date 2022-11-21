@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 text-sm font-bold leading-5 text-white focus:outline-none transition'
            : 'inline-flex items-center px-1 pt-1 text-sm font-bold leading-5 text-white hover:text-gray-700 focus:outline-none transition duration-500';
@endphp


<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>