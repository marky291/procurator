<div>
    <img src="{{ $forged }}" class="{{ $viewImage ? "" : "hidden"}} scale-50" alt="avatar image"/>
    <textarea
        rows="5"
        class="p-4 bg-white dark:bg-[#0A101F]/100 border border-pink-400/10 rounded-xl text-sky-300 w-full"
        id="{{ $this->clipboardTarget() }}"
        >
        {{ $forged }}
    </textarea>
</div>
