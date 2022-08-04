@props(['altText' => ''])

<div class="max-h-[100%] max-w-[100%] flex flex-col justify-center items-center">
    <img src="{{ $this->forged }}" class="" alt="{{ $altText }}"/>
</div>

<textarea
    rows="7"
    class="p-4 bg-white dark:bg-[#0A101F]/100 border border-pink-400/10 rounded-xl dark:text-sky-300 w-full"
    id="{{ $this->clipboardTarget() }}"
>
             {{ $this->forged }}
            </textarea>
