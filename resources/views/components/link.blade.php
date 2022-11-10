@php
    $classes = "text-xs text-gray-400 hover:text-gray-900 font-bold"
@endphp

    <a {{ $attributes->merge(['class' => $classes]) }}> 
        {{ $slot }}
    </a>