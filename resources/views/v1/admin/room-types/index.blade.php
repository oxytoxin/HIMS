@php
    $breadcrumbs = [
        [
            'name' => 'Room Types',
            'url' => route('admin.room-types'),
        ],
    ];
@endphp

<x-admin-layout>
    <x-slot:header>
        <x-breadcrumbs :links="$breadcrumbs" />
    </x-slot:header>
    @livewire('admin.room-types.index')
</x-admin-layout>
