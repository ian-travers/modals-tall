<div
    {{ $attributes }}
    x-data="{ show: @entangle($attributes->wire('model')) }"
    x-show="show"
    @keydown.escape.window="show = false"
    x-cloak
>
    <div @click="show = false" class="fixed inset-0 bg-gray-900 opacity-60"></div>

    <div class="bg-gray-50 shadow-md max-w-md h-44 m-auto rounded-md fixed inset-0" x-show.transition="show">
        <div class="flex flex-col h-full justify-between">
            <header class="p-6">
                <h3 class="font-semibold text-lg">
                    {{ $title }}
                </h3>
            </header>
            <main class="mb-4 px-6">
                {{ $slot }}
            </main>
            <footer class="flex justify-end px-6 py-4 space-x-2 bg-gray-200 rounded-b-md">
                {{ $footer }}
            </footer>
        </div>
    </div>
</div>
