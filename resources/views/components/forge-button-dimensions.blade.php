@props([
    'modelWidth' => 'width',
    'modelHeight' => 'height'
])

<div class="clipboard px-3 py-1 start rounded-full border border-gray-700 flex text-sm items-center justify-center text-gray-700 dark:text-gray-300">
    <input type="number" class="rounded-md w-16 text-center ml-3 mr-3 outline-none dark:text-white dark:bg-slate-800" placeholder="Width" wire:model="{{ $modelWidth }}" wire:input="generate"/>
    <span> x </span>
    <input type="number" class="rounded-md w-16 text-center ml-3 mr-3 outline-none dark:text-white dark:bg-slate-800" placeholder="Height" wire:model="{{ $modelHeight }}" wire:input="generate"/>
</div>
