<x-layout-app>
    <p class="mb-4">
        Would you like to delete your account?
    </p>

    <form
        id="delete-user-form"
        action="/"
        method="post"
        x-data
        @submit.prevent="
                        location.hash='#user-delete-modal'
                    "
    >
        @csrf
        <p class="mb-4">
            <x-button class="bg-blue-400 hover:bg-blue-500 text-gray-50">
                Yes, Delete
            </x-button>
        </p>
    </form>

    {{-- modal --}}
    <x-confirmation-modal hash="#user-delete-modal">
        <x-slot name="title">
            Are you sure?
        </x-slot>

        <p class="text-gray-900">Continuing will delete your account permanently</p>

        <x-slot name="footer">
            <a href="#">
                <x-button class="bg-gray-400 hover:bg-gray-500 text-gray-50">
                    Cancel
                </x-button>
            </a>
            <x-button
                class="bg-blue-400 hover:bg-blue-500 text-gray-50"
                @click="document.querySelector('#delete-user-form').submit()"
            >
                Continue
            </x-button>
        </x-slot>
    </x-confirmation-modal>
</x-layout-app>
