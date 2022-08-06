@props(['onClick' => 'copy'])
<button class="clipboard px-3 py-1 rounded-full border border-gray-700 flex text-sm items-center justify-center text-gray-700 dark:text-gray-300" wire:click="{{ $onClick }}">
    {{ $slot }}
</button>


