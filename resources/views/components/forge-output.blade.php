<div class="flex flex-col items-center">
    <img src="{{ $forged }}" class="{{ $viewImage ? "" : "hidden"}} w-52" alt="{{ $clipboardTarget }} image"/>
    <textarea
        rows="6"
        class="p-4 bg-white dark:bg-[#0A101F]/100 border border-pink-400/10 rounded-xl text-sky-300 w-full"
        id="{{ $clipboardTarget }}"
        >
        {{ $forged }}
    </textarea>
</div>
