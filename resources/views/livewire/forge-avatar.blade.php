<div id="{{ $this->anchor() }}">

    <!-- This will use the component name to create the title for this component on the html -->
    <h3 id="heading-{{ $this->kebabedClassname() }}">{{ Str::of($this->kebabedClassname())->replace(['forge', '-'], ['Generate', ' ']) }}</h3>

    <p>Sit commodi iste iure molestias qui amet voluptatem sed quaerat. Nostrum aut pariatur. Sint ipsa praesentium dolor error cumque velit tenetur. </p>
    <!-- Emit events to livewire component -->

    <div class="relative rounded-2xl bg-gray-200 dark:bg-[#0A101F]/80 ring-1 ring-white/10 backdrop-blur p-4">
        {{--        <img alt="" src="http://localhost/img/bg-blur-cyan.png" width="530" height="530" decoding="async" data-nimg="future" class="absolute opacity-20 -top-64 -right-64">--}}
        {{--        <img alt="" src="http://localhost/img/bg-blur-indigo.png" width="400" height="50" decoding="async" data-nimg="future" class="absolute opacity-20 -bottom-40 -right-44">--}}
        <div class="absolute -top-px left-20 right-11 h-px bg-gradient-to-r from-sky-300/0 via-sky-300/70 to-sky-300/0"></div>
        <div class="absolute -bottom-px left-11 right-20 h-px bg-gradient-to-r from-blue-400/0 via-blue-400 to-blue-400/0"></div>
        <div class="flex justify-between mb-5">
            <button class="px-2 mr-2 rounded-full border border-gray-700 text-sm flex items-center justify-center text-gray-700 dark:text-gray-300" wire:click="generate">Generate
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 32" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linejoin="round" class="w-4 h-4 ml-2 text-gray-700 dark:text-gray-300">
                    <path
                        d="M20.088 1.564a14.91 14.91 0 0 1 3.229 1.338l-.104 1.642a4 4 0 0 0 1.164 3.079 4 4 0 0 0 3.079 1.164l1.642-.104a14.91 14.91 0 0 1 1.338 3.23L29.201 13a4 4 0 0 0-1.354 3 4 4 0 0 0 1.354 3l1.235 1.088c-.318 1.125-.767 2.209-1.338 3.229l-1.642-.104a4 4 0 0 0-3.079 1.164 4 4 0 0 0-1.164 3.079l.104 1.642c-1.02.571-2.105 1.02-3.23 1.338L19 29.201a4 4 0 0 0-3-1.354 4 4 0 0 0-3 1.354l-1.088 1.235c-1.125-.318-2.209-.767-3.229-1.338l.104-1.642a4 4 0 0 0-1.164-3.079 4 4 0 0 0-3.079-1.164l-1.642.104a14.91 14.91 0 0 1-1.338-3.23L2.799 19a4 4 0 0 0 1-1.354A4 4 0 0 0 4.153 16a4 4 0 0 0-.354-1.646 4 4 0 0 0-1-1.354l-1.235-1.088a14.91 14.91 0 0 1 1.338-3.229l1.642.104a4 4 0 0 0 3.079-1.164 4 4 0 0 0 1.164-3.079l-.104-1.642c1.02-.571 2.105-1.02 3.23-1.338L13 2.799a4 4 0 0 0 1.354 1A4 4 0 0 0 16 4.153a4 4 0 0 0 1.646-.354 4 4 0 0 0 1.354-1l1.088-1.235z"></path>
                    <path d="M16 21a5 5 0 1 0 0-10 5 5 0 1 0 0 10z"></path>
                </svg>
            </button>
            <button class="clipboard px-3 py-1 start rounded-full border border-gray-700 flex text-sm items-center justify-center text-gray-700 dark:text-gray-300" wire:click="downloadImage">Download PNG</button>
            <button class="clipboard px-3 py-1 rounded-full border border-gray-700 flex text-sm items-center justify-center text-gray-700 dark:text-gray-300" data-clipboard-target="#{{ $this->clipboardTarget() }}">Copy Base64</button>
        </div>

        <!-- The component passed is created here while passing the clipboard target -->
        <div class="flex flex-col items-center">
            <img src="{{ $forged }}" class="w-52" alt="avatar image"/>
            <textarea
                rows="7"
                class="p-4 bg-white dark:bg-[#0A101F]/100 border border-pink-400/10 rounded-xl dark:text-sky-300 w-full"
                id="{{ $this->clipboardTarget() }}"
            >
             {{ $forged }}
            </textarea>
        </div>

    </div>

</div>
