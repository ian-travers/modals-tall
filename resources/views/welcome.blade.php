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
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur cupiditate deserunt esse
                    et eveniet fuga inventore iusto perspiciatis ratione, vel veritatis voluptas! Laborum neque numquam
                    sint sit vero voluptatem.
                </p>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum non, numquam. Accusantium atque aut
                    autem, delectus doloremque est et excepturi inventore labore modi nihil, nisi obcaecati officiis
                    possimus reiciendis rem repellat tempora voluptate?
                </p>
                <p class="mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cumque delectus hic itaque nulla
                    quaerat reprehenderit saepe voluptate. Aliquid beatae doloremque inventore iusto laboriosam omnis
                    praesentium reiciendis! Ab consectetur deleniti dignissimos eius exercitationem explicabo illo iure
                    magni necessitatibus odit perspiciatis quas sapiente, similique vel.
                </p>
            </main>
        </div>

        <footer class="p-4 flex items-center justify-between bg-blue-800 text-gray-50">
            <h5>My Site</h5>
            <p>2021</p>
        </footer>
    </div>

    {{-- modal --}}
    <div>
        <div class="fixed inset-0 bg-gray-900 opacity-60"></div>

        <div class="bg-gray-50 p-4 shadow-md max-w-md h-44 m-auto rounded-md fixed inset-0">
            <div class="flex flex-col h-full justify-between">
                <header>
                    <h3 class="font-semibold text-lg">Are you sure?</h3>
                </header>
                <main class="my-4">
                    If you proceed, your account will be deleted entirely
                </main>
                <footer class="space-x-1">
                    <button
                        class="px-4 py-2 text-sm bg-gray-400 hover:bg-gray-500 text-gray-50 transition-all duration-200 rounded-md">
                        Cancel
                    </button>
                    <button
                        class="px-4 py-2 text-sm bg-blue-400 hover:bg-blue-500 text-gray-50 transition-all duration-200 rounded-md">
                        Continue
                    </button>
                </footer>
            </div>
        </div>
    </div>
</x-layout-app>
