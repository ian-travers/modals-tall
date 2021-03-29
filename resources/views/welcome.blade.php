<x-layout-app>
    <div class="max-w-xl bg-green-100 mx-auto">
        <header class="bg-blue-500 p-4">
            <h1 class="font-bold text-gray-50 text-xl">My Site</h1>
        </header>

        <div class="grid grid-cols-12 p-4">
            <aside class="mr-6 col-span-3">
                <ul>
                    <li>Link 1</li>
                    <li>Link 2</li>
                    <li>Link 3</li>
                </ul>
            </aside>

            <main class="col-span-9">
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
            </main>
        </div>

        <footer class="p-4 flex items-center justify-between bg-blue-800 text-gray-50">
            <h5>My Site</h5>
            <p>2021</p>
        </footer>
    </div>

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
