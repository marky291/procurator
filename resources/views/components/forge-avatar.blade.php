@props(['altText' => ''])

<img src="{{ $this->forged }}" class="w-52" alt="{{ $altText }}"/>

<textarea
    rows="7"
    class="p-4 bg-white dark:bg-[#0A101F]/100 border border-pink-400/10 rounded-xl dark:text-sky-300 w-full"
    id="{{ $this->clipboardTarget() }}"
>
             {{ $this->forged }}
            </textarea>
