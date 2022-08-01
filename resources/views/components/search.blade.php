<div class="-my-5 mr-6 sm:mr-8 md:mr-0">
    <button type="button" wire:click="showSearch"
            class="group flex h-6 w-6 items-center justify-center sm:justify-start md:h-auto md:w-80 md:flex-none md:rounded-lg md:py-2.5 md:pl-4 md:pr-3.5 md:text-sm md:ring-1 md:ring-slate-200 md:hover:ring-slate-300 dark:md:bg-slate-800/75 dark:md:ring-inset dark:md:ring-white/5 dark:md:hover:bg-slate-700/40 dark:md:hover:ring-slate-500 lg:w-96">
        <svg aria-hidden="true" viewBox="0 0 20 20"
             class="h-5 w-5 flex-none fill-slate-400 group-hover:fill-slate-500 dark:fill-slate-500 md:group-hover:fill-slate-400">
            <path
                d="M16.293 17.707a1 1 0 0 0 1.414-1.414l-1.414 1.414ZM9 14a5 5 0 0 1-5-5H2a7 7 0 0 0 7 7v-2ZM4 9a5 5 0 0 1 5-5V2a7 7 0 0 0-7 7h2Zm5-5a5 5 0 0 1 5 5h2a7 7 0 0 0-7-7v2Zm8.707 12.293-3.757-3.757-1.414 1.414 3.757 3.757 1.414-1.414ZM14 9a4.98 4.98 0 0 1-1.464 3.536l1.414 1.414A6.98 6.98 0 0 0 16 9h-2Zm-1.464 3.536A4.98 4.98 0 0 1 9 14v2a6.98 6.98 0 0 0 4.95-2.05l-1.414-1.414Z"></path>
        </svg>
        <span class="sr-only md:not-sr-only md:ml-2 md:text-slate-500 md:dark:text-slate-400">Search docs</span>
        <kbd class="ml-auto hidden font-medium text-slate-400 dark:text-slate-500 md:block">
            <kbd class="font-sans">⌘</kbd><kbd class="font-sans">K</kbd>
        </kbd>
    </button>

    <x-jet-dialog-modal wire:model="showSearchModal">
        <x-slot name="title">
            <svg aria-hidden="true" viewBox="0 0 20 20" class="w-5 flex-none group-hover:fill-slate-500 dark:fill-slate-500 md:group-hover:fill-slate-400">
                <path d="M16.293 17.707a1 1 0 0 0 1.414-1.414l-1.414 1.414ZM9 14a5 5 0 0 1-5-5H2a7 7 0 0 0 7 7v-2ZM4 9a5 5 0 0 1 5-5V2a7 7 0 0 0-7 7h2Zm5-5a5 5 0 0 1 5 5h2a7 7 0 0 0-7-7v2Zm8.707 12.293-3.757-3.757-1.414 1.414 3.757 3.757 1.414-1.414ZM14 9a4.98 4.98 0 0 1-1.464 3.536l1.414 1.414A6.98 6.98 0 0 0 16 9h-2Zm-1.464 3.536A4.98 4.98 0 0 1 9 14v2a6.98 6.98 0 0 0 4.95-2.05l-1.414-1.414Z"></path>
            </svg>
            <input type="text" class="rounded-md w-full ml-3 mr-3 outline-none dark:text-white dark:bg-slate-800" placeholder="Search docs" wire:model="query">
            <button class="bg-cancel-esc-btn text-[0] appearance-none flex-none rounded-md p-1 shadow-sm w-7 h-6 bg-[center_50%] bg-no-repeat bg-auto dark:bg-[#475569]"
                type="reset" aria-label="Cancel" wire:click="closeSearchModal">Cancel</button>
        </x-slot>
        <x-slot name="content">
                <div class="w-full">
                    @if($query)
                        @if (count($results))
                            @foreach($results as $testUrl)
                                <a href="{{ url($testUrl['url']) }}">
                                    <div class="w-full p-2 m-2 rounded-md bg-slate-900 hover:bg-slate-500 cursor-pointer">
                                        @if(!@empty($testUrl["tags"]))
                                            <div class="pl-4 pb-3">
                                                @foreach($testUrl["tags"] as $urlTag)
                                                    <button class="rounded-xl py-1 px-2 flex-1 text-sm font-semibold text-slate-900 bg-sky-900"
                                                            aria-label="tag name">{{ $urlTag["name"] }}</button>
                                                @endforeach
                                            </div>
                                        @endempty
                                        <h1 class="text-white">{{ $testUrl["name"] }}</h1>
                                        <div>
                                            <h2 class="text-gray-400">{{ $testUrl["desc"] }}</h2>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <div class="text-white">No Search Results</div>
                        @endif
                    @else
                        <div class="text-white">Start typing to search...</div>
                    @endif
                </div>
        </x-slot>
        <x-slot name="footer">
            <button wire:click="closeSearchModal" class="rounded-full bg-slate-600 py-2 px-4 text-sm font-medium text-white hover:bg-slate-700 focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white/50 active:text-slate-400" href="/">Cancel</button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
