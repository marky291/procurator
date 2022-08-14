<button class="clipboard px-3 py-1 rounded-full border border-gray-700 flex text-sm items-center justify-center text-gray-700 dark:text-gray-300"
    x-on:click="window.livewire.emitTo('copy-modal', 'show', '{{ $this->kebabedClassname() }}')"" data-clipboard-target="#{{ $this->clipboardTarget() }}">
    {{ $slot }}
</button>


