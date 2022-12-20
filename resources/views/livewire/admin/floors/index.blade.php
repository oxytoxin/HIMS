<div>
    <x-content>
        <x-table.head-actions>
            <x-slot:right>
                <x-button.primary href="{{ route('admin.floors.create') }}"><svg xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="mr-2 h-6 w-6">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Create
                </x-button.primary>
            </x-slot:right>
        </x-table.head-actions>
        <x-table>
            <x-slot:header>
                <x-table.head>Name</x-table.head>
                <x-table.head>Total Rooms</x-table.head>
                <x-table.head>Actions</x-table.head>
            </x-slot:header>
            @forelse ($floors as $floor)
                <x-table.row>
                    <x-table.cell>{{ $floor->numberWithFormat() }}</x-table.cell>
                    <x-table.cell>{{ $floor->rooms_count }}</x-table.cell>
                    <x-table.cell>
                        <div class="flex space-x-2">
                            <x-table.edit-button href="{{ route('admin.floors.edit', ['floor' => $floor->id]) }}" />
                        </div>
                    </x-table.cell>
                </x-table.row>
            @empty
                <x-table.row>
                    <x-table.cell colspan="3"
                        class="text-center">No floors found.</x-table.cell>
                </x-table.row>
            @endforelse
            <x-slot:footer>
                {{ $floors->links() }}
            </x-slot:footer>
        </x-table>
    </x-content>
</div>
