<div
    x-data="{ show: @entangle($attributes->wire('model')).defer }"
    x-show="show"
    x-on:keydown.escape.window="show = false"
    x-init="setTimeout(() => show = false, 8000)"
    class="flex flex-col fixed inset-0 overflow-y-auto px-4 py-6 sm:py-24 sm:px-0 z-40">

    <div x-show="show" class="fixed inset-0 transform" x-on:click="show = false">
        <div class="absolute inset-0 bg-transparent"></div>
    </div>

    <div x-show="show" class="flex justify-center bg-[#aadbb6] text-[#155724] rounded-lg overflow-hidden transform sm:mx-auto max-w-sm animate-bounce"">
        {{ $slot }}
    </div>
</div>
