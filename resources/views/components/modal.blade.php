<div x-data="{
    show: @entangle($attributes->wire('model'))
}" x-show="show" x-on:keydown.escape.window="show = false"
    class="fixed inset-0 overflow-y-auto px-4 py-6 md:py-24 sm:px-0 z-40">
    <div x-show="show" class="fixed inset-0 transform">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div x-show="show" class="bg-gray-50 rounded-lg overflow-hidden transform sm:w-full sm:mx-auto max-w-lg">
        {{ $slot }}</div>
</div>
