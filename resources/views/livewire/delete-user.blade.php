<form>
    <p class="mb-4">
        <x-button
            wire:click="$set('showModal', true)"
            class="bg-blue-400 hover:bg-blue-500 text-gray-50"
        >
            Yes, Delete
        </x-button>
    </p>

    <x-confirmation-modal
        wire:model.defer="showModal"
    >
        <x-slot name="title">
            Are you sure?
        </x-slot>

        <p class="text-gray-900">Continuing will delete your account permanently</p>

        <x-slot name="footer">
            <x-button
                class="bg-gray-400 hover:bg-gray-500 text-gray-50"
                wire:click="$set('showModal', false)"
            >
                Cancel
            </x-button>
            <x-button
                class="bg-blue-400 hover:bg-blue-500 text-gray-50"
                wire:click="handle"
            >
                Continue
            </x-button>
        </x-slot>
    </x-confirmation-modal>
</form>


