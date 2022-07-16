@props(['component'])

<div>

    <!-- This will use the component name to create the title for this component on the html -->
    <h3 id="heading-{{ $component }}">{{ Str::of($component)->replace(['forge', '-'], ['Generate', ' ']) }}</h3>

    <!-- Emit events to livewire component -->
    <button class="rounded border" onclick="window.livewire.emitTo('{{ $component }}', 'generate')">Generate</button>
    <button class="clipboard rounded border" data-clipboard-target="#{{ $component }}">Copy Sentence</button>

    <!-- The component passed is created here while passing the clipboard target -->
    @livewire($component, ['clipboardTarget' => $component])

    <!-- Slot a description or addition context for this component on the page -->
    {{ $slot }}

</div>
