<div
    {{ $attributes }}
    x-data="{ show: @entangle($attributes->wire('model')) }"
    x-show="show"
    @keydown.escape.window="show = false"
>
    <div @click="show = false" class="fixed inset-0 bg-gray-900 opacity-60"></div>

    <div class="bg-gray-50 p-4 shadow-md max-w-md h-44 m-auto rounded-md fixed inset-0">
        <div class="flex flex-col h-full justify-between">
            <header>
                <h3 class="font-semibold text-lg">
                    {{ $title }}
                </h3>
            </header>
            <main class="my-4">
                {{ $slot }}
            </main>
            <footer class="space-x-1">
                {{ $footer }}
            </footer>
        </div>
    </div>
</div>
