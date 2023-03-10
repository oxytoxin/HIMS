<div class="mx-auto flex max-w-4xl justify-center rounded-lg border bg-gray-50 p-5 shadow-sm">
    <form wire:submit.prevent="update"
        class="flex w-full">
        @csrf
        <div class="grid w-full space-y-3">
            <h1 class="text-xl font-semibold">
                Edit Front Desk
            </h1>
            <div wire:key="frontdesk.name"
                class="grid w-full gap-2">
                <x-input-label for="name"
                    value="Name" />
                <div class="grid w-full">
                    <x-text-input wire:model.defer="frontdesk.name"
                        type="text"
                        id="name" />
                </div>
                @error('frontdesk.name')
                    <x-my-error>{{ $message }}</x-my-error>
                @enderror
            </div>
            <div wire:key="frontdesk.contact_number"
                class="grid w-full gap-2">
                <x-input-label for="contact_number"
                    value="Contact Number" />
                <div class="grid w-full">
                    <x-text-input wire:model.defer="frontdesk.contact_number"
                        type="number"
                        id="contact_number" />
                </div>
                @error('frontdesk.contact_number')
                    <x-my-error>{{ $message }}</x-my-error>
                @enderror
            </div>
            <div wire:key="frontdesk.email"
                class="grid w-full gap-2">
                <x-input-label for="email"
                    value="Email" />
                <div class="grid w-full">
                    <x-text-input wire:model.defer="frontdesk.email"
                        type="email"
                        name="email" />
                </div>
                @error('frontdesk.email')
                    <x-my-error>{{ $message }}</x-my-error>
                @enderror
            </div>
            <div class="flex space-x-3">
                <x-button href="{{ route('admin.amenities') }}">Return</x-button>
                <x-button.primary type="submit">Update</x-button.primary>
            </div>
        </div>
    </form>
</div>
