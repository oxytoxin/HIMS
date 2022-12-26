@props(['type' => 'button', 'href' => null])

@php
    $tag = $href ? 'a' : 'button';
@endphp

<{{ $tag }} type="{{ $type }}"
    @if ($tag) href="{{ $href }}" @endif
    wire:loading.attr="disabled"
    {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-yellow-500 border border-transparent rounded-lg shadow-sm order-0 hover:bg-yellow-600 focus:outline-none ']) }}>
    {{ $slot }}
    </{{ $tag }}>
