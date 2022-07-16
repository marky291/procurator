@props(['component'])

<div>

    <!-- This will use the component name to create the title for this component on the html -->
    <h3 id="heading-{{ $component }}">{{ Str::of($component)->replace(['forge', '-'], ['Generate', ' ']) }}</h3>

    <!-- Emit events to livewire component -->
    <div class="grid grid-cols-2 gap-2 mb-3">
        <button class="px-3 py-1 rounded border flex items-center justify-center text-gray-700 dark:text-gray-300" onclick="window.livewire.emitTo('{{ $component }}', 'generate')">Generate
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 32" fill="none" stroke="currentColor" stroke-width="2"
                 stroke-linejoin="round" class="w-4 h-4 ml-2 text-gray-700 dark:text-gray-300">
                <path
                    d="M20.088 1.564a14.91 14.91 0 0 1 3.229 1.338l-.104 1.642a4 4 0 0 0 1.164 3.079 4 4 0 0 0 3.079 1.164l1.642-.104a14.91 14.91 0 0 1 1.338 3.23L29.201 13a4 4 0 0 0-1.354 3 4 4 0 0 0 1.354 3l1.235 1.088c-.318 1.125-.767 2.209-1.338 3.229l-1.642-.104a4 4 0 0 0-3.079 1.164 4 4 0 0 0-1.164 3.079l.104 1.642c-1.02.571-2.105 1.02-3.23 1.338L19 29.201a4 4 0 0 0-3-1.354 4 4 0 0 0-3 1.354l-1.088 1.235c-1.125-.318-2.209-.767-3.229-1.338l.104-1.642a4 4 0 0 0-1.164-3.079 4 4 0 0 0-3.079-1.164l-1.642.104a14.91 14.91 0 0 1-1.338-3.23L2.799 19a4 4 0 0 0 1-1.354A4 4 0 0 0 4.153 16a4 4 0 0 0-.354-1.646 4 4 0 0 0-1-1.354l-1.235-1.088a14.91 14.91 0 0 1 1.338-3.229l1.642.104a4 4 0 0 0 3.079-1.164 4 4 0 0 0 1.164-3.079l-.104-1.642c1.02-.571 2.105-1.02 3.23-1.338L13 2.799a4 4 0 0 0 1.354 1A4 4 0 0 0 16 4.153a4 4 0 0 0 1.646-.354 4 4 0 0 0 1.354-1l1.088-1.235z"></path>
                <path d="M16 21a5 5 0 1 0 0-10 5 5 0 1 0 0 10z"></path>
            </svg>
        </button>
        <button class="clipboard px-3 py-1 rounded border flex items-center justify-center text-gray-700 dark:text-gray-300" data-clipboard-target="#{{ $component }}">Copy Sentence</button>
    </div>

    <!-- The component passed is created here while passing the clipboard target -->
    @livewire($component, ['clipboardTarget' => $component])

    <!-- Slot a description or addition context for this component on the page -->
    {{ $slot }}

</div>
