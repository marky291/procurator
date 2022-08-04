<div class="relative col-span-2">
    <div class="absolute inset-0 rounded-2xl bg-gradient-to-tr from-sky-300 via-sky-300/70 to-blue-300 opacity-10 blur-lg"></div>
    <div class="absolute inset-0 rounded-2xl bg-gradient-to-tr from-sky-300 via-sky-300/70 to-blue-300 opacity-10"></div>
    <div
        class="flex flex-col content-center items-stretch justify-center col-span-2 relative rounded-2xl bg-gray-200 dark:bg-[#0A101F]/80 ring-1 ring-white/10 backdrop-blur p-4">
        <div
            class="absolute -top-px left-20 right-11 h-px bg-gradient-to-r from-sky-300/0 via-sky-300/70 to-sky-300/0"></div>
        <div
            class="absolute -bottom-px left-11 right-20 h-px bg-gradient-to-r from-blue-400/0 via-blue-400 to-blue-400/0"></div>

        <div class="mb-4">
            <svg aria-hidden="true" viewBox="0 0 42 10" fill="none" class="h-2.5 w-auto stroke-slate-500/30">
                <circle cx="5" cy="5" r="4.5"></circle>
                <circle cx="21" cy="5" r="4.5"></circle>
                <circle cx="37" cy="5" r="4.5"></circle>
            </svg>
        </div>

        {{ $slot }}
    </div>
</div>

