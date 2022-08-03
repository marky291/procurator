<div id="{{ $this->anchor() }}" class="grid grid-cols-3 items-center gap-2">


    <!-- This will use the component name to create the title for this component on the html -->
    <h3 class="col-span-1" id="heading-{{ $this->kebabedClassname() }}">{{ Str::of($this->kebabedClassname())->replace(['forge', '-'], ['Generate', ' ']) }}</h3>

{{--    <p>Sit commodi iste iure molestias qui amet voluptatem sed quaerat. Nostrum aut pariatur. Sint ipsa praesentium dolor error cumque velit tenetur. </p>--}}
    <!-- Emit events to livewire component -->

    <div class="col-span-2 relative rounded-2xl bg-gray-200 dark:bg-[#0A101F]/80 ring-1 ring-white/10 backdrop-blur p-4">
        {{--        <img alt="" src="http://localhost/img/bg-blur-cyan.png" width="530" height="530" decoding="async" data-nimg="future" class="absolute opacity-20 -top-64 -right-64">--}}
        {{--        <img alt="" src="http://localhost/img/bg-blur-indigo.png" width="400" height="50" decoding="async" data-nimg="future" class="absolute opacity-20 -bottom-40 -right-44">--}}
        <div class="absolute -top-px left-20 right-11 h-px bg-gradient-to-r from-sky-300/0 via-sky-300/70 to-sky-300/0"></div>
        <div class="absolute -bottom-px left-11 right-20 h-px bg-gradient-to-r from-blue-400/0 via-blue-400 to-blue-400/0"></div>
        <div class="flex justify-between mb-5">
            <x-forge-button-generate click="generate">Generate</x-forge-button-generate>
            <x-forge-button-copy :clipboard="$this->clipboardTarget()">Copy</x-forge-button-copy>
        </div>

        <x-forge-input :forged="$forged"/>

    </div>

</div>
