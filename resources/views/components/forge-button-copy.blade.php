@props(['clipboard'])

<button class="clipboard px-3 py-1 rounded-full border border-gray-700 flex text-sm items-center justify-center text-gray-700 dark:text-gray-300" data-clipboard-target="#{{ $clipboard }}">
    {{ $slot }}
</button>


