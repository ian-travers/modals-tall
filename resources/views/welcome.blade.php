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
    <x-confirmation-modal></x-confirmation-modal>
</x-layout-app>
