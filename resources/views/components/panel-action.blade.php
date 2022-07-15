@props([''])

<div class="group relative rounded-xl border border-slate-200 dark:border-slate-800">
    <div
        class="absolute -inset-px rounded-xl border-2 border-transparent opacity-0 [background:linear-gradient(var(--quick-links-hover-bg,theme(colors.sky.50)),var(--quick-links-hover-bg,theme(colors.sky.50)))_padding-box,linear-gradient(to_top,theme(colors.indigo.400),theme(colors.cyan.400),theme(colors.sky.500))_border-box] group-hover:opacity-100 dark:[--quick-links-hover-bg:theme(colors.slate.800)]"></div>
    <div class="relative overflow-hidden rounded-xl p-6">
        <svg aria-hidden="true" viewBox="0 0 32 32" fill="none"
             class="h-8 w-8 [--icon-foreground:theme(colors.slate.900)] [--icon-background:theme(colors.white)]">
            <defs>
                <radialGradient cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" id=":R1h19n6:-gradient"
                                gradientTransform="matrix(0 21 -21 0 12 3)">
                    <stop stop-color="#0EA5E9"></stop>
                    <stop stop-color="#22D3EE" offset=".527"></stop>
                    <stop stop-color="#818CF8" offset="1"></stop>
                </radialGradient>
                <radialGradient cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" id=":R1h19n6:-gradient-dark"
                                gradientTransform="matrix(0 21 -21 0 16 7)">
                    <stop stop-color="#0EA5E9"></stop>
                    <stop stop-color="#22D3EE" offset=".527"></stop>
                    <stop stop-color="#818CF8" offset="1"></stop>
                </radialGradient>
            </defs>
            <g class="dark:hidden">
                <circle cx="12" cy="12" r="12" fill="url(#:R1h19n6:-gradient)"></circle>
                <path d="m8 8 9 21 2-10 10-2L8 8Z" fill-opacity="0.5"
                      class="fill-[var(--icon-background)] stroke-[color:var(--icon-foreground)]" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
            <g class="hidden dark:inline">
                <path d="m4 4 10.286 24 2.285-11.429L28 14.286 4 4Z" fill="url(#:R1h19n6:-gradient-dark)"
                      stroke="url(#:R1h19n6:-gradient-dark)" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"></path>
            </g>
        </svg>
        <h2 class="mt-4 font-display text-base text-slate-900 dark:text-white"><a href="/"><span
                    class="absolute -inset-px rounded-xl"></span>Installation</a></h2>
        <p class="mt-1 text-sm text-slate-700 dark:text-slate-400">Step-by-step guides to
            setting up your system and installing the library.</p></div>
</div>
