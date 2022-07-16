<div>

    <button class="rounded border" wire:click="generate">Generate</button>
    <button class="clipboard rounded border" data-clipboard-target="#generated-sentence">Copy Sentence</button>

    <p id="generated-sentence">{{ $sentence }}</p>
</div>
