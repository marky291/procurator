<div>

    <button class="rounded border" wire:click="generate">Generate</button>
    <button class="clipboard rounded border" data-clipboard-target="#generated-sentence">Copy Sentence</button>

    <input class="text-gray-800 w-full" id="generated-sentence" value="{{ $sentence }}">
</div>
