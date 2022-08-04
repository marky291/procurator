@props(['click'])

<button
    class="rounded-lg flex items-center bg-slate-800  px-3 text-xs font-medium text-white hover:bg-slate-700 focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white/50 active:text-slate-400"
    wire:click="generate">{{ $slot }}

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 32" fill="none" stroke="currentColor" stroke-width="2"
         stroke-linejoin="round" class="w-4 h-4 ml-2">
        <path
            d="M20.088 1.564a14.91 14.91 0 0 1 3.229 1.338l-.104 1.642a4 4 0 0 0 1.164 3.079 4 4 0 0 0 3.079 1.164l1.642-.104a14.91 14.91 0 0 1 1.338 3.23L29.201 13a4 4 0 0 0-1.354 3 4 4 0 0 0 1.354 3l1.235 1.088c-.318 1.125-.767 2.209-1.338 3.229l-1.642-.104a4 4 0 0 0-3.079 1.164 4 4 0 0 0-1.164 3.079l.104 1.642c-1.02.571-2.105 1.02-3.23 1.338L19 29.201a4 4 0 0 0-3-1.354 4 4 0 0 0-3 1.354l-1.088 1.235c-1.125-.318-2.209-.767-3.229-1.338l.104-1.642a4 4 0 0 0-1.164-3.079 4 4 0 0 0-3.079-1.164l-1.642.104a14.91 14.91 0 0 1-1.338-3.23L2.799 19a4 4 0 0 0 1-1.354A4 4 0 0 0 4.153 16a4 4 0 0 0-.354-1.646 4 4 0 0 0-1-1.354l-1.235-1.088a14.91 14.91 0 0 1 1.338-3.229l1.642.104a4 4 0 0 0 3.079-1.164 4 4 0 0 0 1.164-3.079l-.104-1.642c1.02-.571 2.105-1.02 3.23-1.338L13 2.799a4 4 0 0 0 1.354 1A4 4 0 0 0 16 4.153a4 4 0 0 0 1.646-.354 4 4 0 0 0 1.354-1l1.088-1.235z"></path>
        <path d="M16 21a5 5 0 1 0 0-10 5 5 0 1 0 0 10z"></path>
    </svg>

</button>
