<!DOCTYPE html>
<html class="antialiased [font-feature-settings:'ss01'] dark js-focus-visible" data-theme="dark"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    x-cloak
    x-data="{darkMode: localStorage.getItem('dark') === 'true'}"
    x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
    x-bind:class="{'dark': darkMode}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    @livewireStyles

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white dark:bg-slate-900">
    <div id="__next">
        <header
            class="sticky top-0 z-50 flex flex-wrap items-center justify-between bg-white px-4 py-5 shadow-md shadow-slate-900/5 transition duration-500 dark:shadow-none sm:px-6 lg:px-8 dark:bg-slate-900">
            <div class="mr-6 flex lg:hidden">
                <button type="button" class="relative" aria-label="Open navigation">
                    <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"
                        class="h-6 w-6 stroke-slate-500">
                        <path d="M4 7h16M4 12h16M4 17h16"></path>
                    </svg>
                </button>
                <div class="unknown-class"></div>
            </div>
            <div class="relative flex flex-grow basis-0 items-center"><a aria-label="Home page" href="/">
                    <svg aria-hidden="true" viewBox="0 0 36 36" fill="none" class="h-9 w-9 lg:hidden">
                        <g fill="none" stroke="#38BDF8" stroke-linejoin="round" stroke-width="3">
                            <path d="M10.308 5L18 17.5 10.308 30 2.615 17.5 10.308 5z"></path>
                            <path d="M18 17.5L10.308 5h15.144l7.933 12.5M18 17.5h15.385L25.452 30H10.308L18 17.5z">
                            </path>
                        </g>
                    </svg>
                    <svg aria-hidden="true" viewBox="0 0 227 36" fill="none"
                        class="hidden h-9 w-auto fill-slate-700 dark:fill-sky-100 lg:block">
                        <g fill="none" stroke="#38BDF8" stroke-linejoin="round" stroke-width="3">
                            <path d="M10.308 5L18 17.5 10.308 30 2.615 17.5 10.308 5z"></path>
                            <path d="M18 17.5L10.308 5h15.144l7.933 12.5M18 17.5h15.385L25.452 30H10.308L18 17.5z">
                            </path>
                        </g>
                        <path
                            d="M55.96 26.2c-1.027 0-1.973-.173-2.84-.52a6.96 6.96 0 01-2.24-1.5 6.979 6.979 0 01-1.46-2.3c-.347-.893-.52-1.867-.52-2.92 0-1.027.18-1.973.54-2.84a6.71 6.71 0 011.52-2.28 6.922 6.922 0 012.3-1.52 7.48 7.48 0 012.86-.54c.667 0 1.32.093 1.96.28a6.12 6.12 0 011.78.78 5.7 5.7 0 011.4 1.24l-1.88 2.08a6.272 6.272 0 00-1-.82 3.728 3.728 0 00-1.08-.54 3.542 3.542 0 00-1.2-.2 4.14 4.14 0 00-1.62.32 3.991 3.991 0 00-1.3.9 4.197 4.197 0 00-.9 1.38 4.755 4.755 0 00-.32 1.78c0 .667.107 1.273.32 1.82.213.533.513.993.9 1.38.387.373.847.667 1.38.88.547.2 1.147.3 1.8.3a4.345 4.345 0 002.34-.68c.347-.213.653-.46.92-.74l1.46 2.34c-.32.36-.753.687-1.3.98a7.784 7.784 0 01-1.8.7c-.667.16-1.34.24-2.02.24zm6.99-.2l5.48-14h2.68l5.46 14h-3.08l-2.82-7.54c-.08-.213-.18-.487-.3-.82a922.595 922.595 0 00-.68-2.12 13.694 13.694 0 01-.24-.86l.54-.02c-.08.307-.174.627-.28.96-.094.32-.194.653-.3 1-.108.333-.22.66-.34.98-.12.32-.234.633-.34.94L65.91 26h-2.96zm2.54-2.94l.98-2.42h6.42l1 2.42h-8.4zm19.794 3.14c-1.026 0-1.973-.173-2.84-.52a6.96 6.96 0 01-2.24-1.5 6.98 6.98 0 01-1.46-2.3c-.346-.893-.52-1.867-.52-2.92 0-1.027.18-1.973.54-2.84a6.71 6.71 0 011.52-2.28 6.923 6.923 0 012.3-1.52 7.48 7.48 0 012.86-.54c.667 0 1.32.093 1.96.28a6.118 6.118 0 011.78.78c.547.347 1.014.76 1.4 1.24l-1.88 2.08a6.272 6.272 0 00-1-.82 3.728 3.728 0 00-1.08-.54 3.542 3.542 0 00-1.2-.2 4.14 4.14 0 00-1.62.32 3.992 3.992 0 00-1.3.9 4.197 4.197 0 00-.9 1.38 4.755 4.755 0 00-.32 1.78c0 .667.107 1.273.32 1.82.214.533.514.993.9 1.38.387.373.847.667 1.38.88.547.2 1.147.3 1.8.3a4.345 4.345 0 002.34-.68 4.53 4.53 0 00.92-.74l1.46 2.34c-.32.36-.753.687-1.3.98a7.784 7.784 0 01-1.8.7c-.666.16-1.34.24-2.02.24zm17.469-.2V12h3v14h-3zm-8.82 0V12h3v14h-3zm1.2-5.62l.02-2.72h9.14v2.72h-9.16zM110.402 26V12h9.46v2.64h-6.54v8.72h6.68V26h-9.6zm1.4-5.86v-2.56h7.1v2.56h-7.1zM122.437 26l5.48-14h2.68l5.46 14h-3.08l-2.82-7.54c-.08-.213-.18-.487-.3-.82l-.34-1.06-.34-1.06a14.73 14.73 0 01-.24-.86l.54-.02c-.08.307-.173.627-.28.96a63.3 63.3 0 01-.3 1c-.106.333-.22.66-.34.98-.12.32-.233.633-.34.94l-2.82 7.48h-2.96zm2.54-2.94l.98-2.42h6.42l1 2.42h-8.4zM139.023 26V12h5.74c1.027 0 1.953.173 2.78.52.84.333 1.56.813 2.16 1.44a6.097 6.097 0 011.4 2.2c.32.853.48 1.8.48 2.84 0 1.027-.16 1.973-.48 2.84a6.438 6.438 0 01-1.38 2.22 6.394 6.394 0 01-2.16 1.44c-.84.333-1.773.5-2.8.5h-5.74zm3-2.18l-.32-.52h2.96c.6 0 1.14-.1 1.62-.3.48-.213.887-.5 1.22-.86.347-.373.607-.827.78-1.36.173-.533.26-1.127.26-1.78a5.56 5.56 0 00-.26-1.76 3.595 3.595 0 00-.78-1.36 3.323 3.323 0 00-1.22-.86 3.948 3.948 0 00-1.62-.32h-3.02l.38-.48v9.6zM158.671 26l-5.58-14h3.18l2.92 7.58c.16.413.293.78.4 1.1.12.307.22.6.3.88.093.267.18.533.26.8.08.253.16.533.24.84l-.58.02c.107-.413.213-.793.32-1.14.107-.36.227-.733.36-1.12.133-.387.3-.847.5-1.38l2.76-7.58h3.16l-5.62 14h-2.62zm8.114 0l5.48-14h2.68l5.46 14h-3.08l-2.82-7.54c-.08-.213-.18-.487-.3-.82l-.34-1.06-.34-1.06a13.293 13.293 0 01-.24-.86l.54-.02c-.08.307-.173.627-.28.96a63.3 63.3 0 01-.3 1c-.107.333-.22.66-.34.98-.12.32-.233.633-.34.94l-2.82 7.48h-2.96zm2.54-2.94l.98-2.42h6.42l1 2.42h-8.4zM183.371 26V12h2.68l7.74 10.46h-.56c-.054-.413-.1-.813-.14-1.2l-.12-1.2c-.027-.413-.054-.833-.08-1.26-.014-.44-.027-.9-.04-1.38a56.825 56.825 0 01-.02-1.6V12h2.94v14h-2.72l-7.9-10.56.76.02c.066.693.12 1.287.16 1.78a36.623 36.623 0 01.18 2.2c.026.267.04.52.04.76.013.24.02.493.02.76V26h-2.94zm23.175.2c-1.027 0-1.973-.173-2.84-.52-.853-.36-1.6-.86-2.24-1.5a6.979 6.979 0 01-1.46-2.3c-.347-.893-.52-1.867-.52-2.92 0-1.027.18-1.973.54-2.84a6.71 6.71 0 011.52-2.28 6.919 6.919 0 012.3-1.52 7.48 7.48 0 012.86-.54c.667 0 1.32.093 1.96.28a6.12 6.12 0 011.78.78 5.7 5.7 0 011.4 1.24l-1.88 2.08a6.259 6.259 0 00-1-.82 3.721 3.721 0 00-1.08-.54 3.54 3.54 0 00-1.2-.2 4.14 4.14 0 00-1.62.32 3.991 3.991 0 00-1.3.9 4.206 4.206 0 00-.9 1.38 4.76 4.76 0 00-.32 1.78c0 .667.107 1.273.32 1.82.213.533.513.993.9 1.38.387.373.847.667 1.38.88.547.2 1.147.3 1.8.3a4.35 4.35 0 002.34-.68c.347-.213.653-.46.92-.74l1.46 2.34c-.32.36-.753.687-1.3.98a7.773 7.773 0 01-1.8.7c-.667.16-1.34.24-2.02.24zm8.649-.2V12h9.46v2.64h-6.54v8.72h6.68V26h-9.6zm1.4-5.86v-2.56h7.1v2.56h-7.1z">
                        </path>
                    </svg>
                </a></div>
            @livewire('search')
            <div class="relative flex basis-0 justify-end gap-6 sm:gap-8 md:flex-grow">
                <div class="relative z-10">
                    <label class="sr-only" id="headlessui-listbox-label-:R1j36:">Theme</label>
                        <button x-cloak x-on:click="darkMode = !darkMode;">
                            <x-heroicon-s-moon x-show="!darkMode" class="p-2 ml-3 w-8 h-8 text-gray-700 bg-gray-100 rounded-md transition cursor-pointer hover:bg-gray-200" />
                            <x-heroicon-s-sun x-show="darkMode" class="p-2 ml-3 w-8 h-8 text-gray-100 bg-gray-700 rounded-md transition cursor-pointer dark:hover:bg-gray-600" />
                        </button>
                </div>
                <a class="group" aria-label="GitHub" href="https://github.com">
                    <svg aria-hidden="true" viewBox="0 0 16 16"
                        class="h-6 w-6 fill-slate-400 group-hover:fill-slate-500 dark:group-hover:fill-slate-300">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C13.71 14.53 16 11.53 16 8C16 3.58 12.42 0 8 0Z">
                        </path>
                    </svg>
                </a>
            </div>
        </header>
        <div
            class="overflow-hidden bg-slate-900 dark:-mb-32 dark:mt-[-4.5rem] dark:pb-32 dark:pt-[4.5rem] dark:lg:mt-[-4.75rem] dark:lg:pt-[4.75rem]">
            <div class="py-16 sm:px-2 lg:relative lg:py-20 lg:px-0">
                <div
                    class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-y-16 gap-x-8 px-4 lg:max-w-8xl lg:grid-cols-2 lg:px-8 xl:gap-x-16 xl:px-12">
                    <div class="relative z-10 md:text-center lg:text-left"><img alt=""
                            src="{{ asset('img/bg-blur-cyan.png') }}" width="530" height="530" decoding="async"
                            data-nimg="future" class="absolute bottom-full right-full -mr-72 -mb-56 opacity-50">
                        <div class="relative py-12">
                            <p
                                class="inline bg-gradient-to-r from-indigo-200 via-sky-400 to-indigo-200 bg-clip-text font-display text-5xl tracking-tight text-transparent">
                                AI Content Generation Tool</p>
                            <p class="mt-3 text-2xl tracking-tight text-slate-400">Perfect for UI/UX design, prototyping, or testing.</p>
                        </div>
                    </div>
                    <div class="relative lg:static xl:pl-10">
                        <div
                            class="absolute inset-x-[-50vw] -top-32 -bottom-48 [mask-image:linear-gradient(transparent,white,white)] dark:[mask-image:linear-gradient(transparent,white,transparent)] lg:left-[calc(50%+14rem)] lg:right-0 lg:-top-32 lg:-bottom-32 lg:[mask-image:none] lg:dark:[mask-image:linear-gradient(white,white,transparent)]">
                            <svg aria-hidden="true" viewBox="0 0 668 1069" width="668" height="1069"
                                fill="none"
                                class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 lg:translate-y-[-60%]">
                                <defs>
                                    <clipPath id=":R1l6:-clip-path">
                                        <path fill="#fff" transform="rotate(-180 334 534.4)"
                                            d="M0 0h668v1068.8H0z"></path>
                                    </clipPath>
                                </defs>
                                <g opacity=".4" clip-path="url(#:R1l6:-clip-path)" stroke-width="4">
                                    <path opacity=".3"
                                        d="M584.5 770.4v-474M484.5 770.4v-474M384.5 770.4v-474M283.5 769.4v-474M183.5 768.4v-474M83.5 767.4v-474"
                                        stroke="#334155"></path>
                                    <path
                                        d="M83.5 221.275v6.587a50.1 50.1 0 0 0 22.309 41.686l55.581 37.054a50.102 50.102 0 0 1 22.309 41.686v6.587M83.5 716.012v6.588a50.099 50.099 0 0 0 22.309 41.685l55.581 37.054a50.102 50.102 0 0 1 22.309 41.686v6.587M183.7 584.5v6.587a50.1 50.1 0 0 0 22.31 41.686l55.581 37.054a50.097 50.097 0 0 1 22.309 41.685v6.588M384.101 277.637v6.588a50.1 50.1 0 0 0 22.309 41.685l55.581 37.054a50.1 50.1 0 0 1 22.31 41.686v6.587M384.1 770.288v6.587a50.1 50.1 0 0 1-22.309 41.686l-55.581 37.054A50.099 50.099 0 0 0 283.9 897.3v6.588"
                                        stroke="#334155"></path>
                                    <path
                                        d="M384.1 770.288v6.587a50.1 50.1 0 0 1-22.309 41.686l-55.581 37.054A50.099 50.099 0 0 0 283.9 897.3v6.588M484.3 594.937v6.587a50.1 50.1 0 0 1-22.31 41.686l-55.581 37.054A50.1 50.1 0 0 0 384.1 721.95v6.587M484.3 872.575v6.587a50.1 50.1 0 0 1-22.31 41.686l-55.581 37.054a50.098 50.098 0 0 0-22.309 41.686v6.582M584.501 663.824v39.988a50.099 50.099 0 0 1-22.31 41.685l-55.581 37.054a50.102 50.102 0 0 0-22.309 41.686v6.587M283.899 945.637v6.588a50.1 50.1 0 0 1-22.309 41.685l-55.581 37.05a50.12 50.12 0 0 0-22.31 41.69v6.59M384.1 277.637c0 19.946 12.763 37.655 31.686 43.962l137.028 45.676c18.923 6.308 31.686 24.016 31.686 43.962M183.7 463.425v30.69c0 21.564 13.799 40.709 34.257 47.529l134.457 44.819c18.922 6.307 31.686 24.016 31.686 43.962M83.5 102.288c0 19.515 13.554 36.412 32.604 40.645l235.391 52.309c19.05 4.234 32.605 21.13 32.605 40.646M83.5 463.425v-58.45M183.699 542.75V396.625M283.9 1068.8V945.637M83.5 363.225v-141.95M83.5 179.524v-77.237M83.5 60.537V0M384.1 630.425V277.637M484.301 830.824V594.937M584.5 1068.8V663.825M484.301 555.275V452.988M584.5 622.075V452.988M384.1 728.537v-56.362M384.1 1068.8v-20.88M384.1 1006.17V770.287M283.9 903.888V759.85M183.699 1066.71V891.362M83.5 1068.8V716.012M83.5 674.263V505.175"
                                        stroke="#334155"></path>
                                    <circle cx="83.5" cy="384.1" r="10.438"
                                        transform="rotate(-180 83.5 384.1)" fill="#1E293B" stroke="#334155"></circle>
                                    <circle cx="83.5" cy="200.399" r="10.438"
                                        transform="rotate(-180 83.5 200.399)" stroke="#334155"></circle>
                                    <circle cx="83.5" cy="81.412" r="10.438"
                                        transform="rotate(-180 83.5 81.412)" stroke="#334155"></circle>
                                    <circle cx="183.699" cy="375.75" r="10.438"
                                        transform="rotate(-180 183.699 375.75)" fill="#1E293B" stroke="#334155">
                                    </circle>
                                    <circle cx="183.699" cy="563.625" r="10.438"
                                        transform="rotate(-180 183.699 563.625)" fill="#1E293B" stroke="#334155">
                                    </circle>
                                    <circle cx="384.1" cy="651.3" r="10.438"
                                        transform="rotate(-180 384.1 651.3)" fill="#1E293B" stroke="#334155">
                                    </circle>
                                    <circle cx="484.301" cy="574.062" r="10.438"
                                        transform="rotate(-180 484.301 574.062)" fill="#0EA5E9" fill-opacity=".42"
                                        stroke="#0EA5E9"></circle>
                                    <circle cx="384.1" cy="749.412" r="10.438"
                                        transform="rotate(-180 384.1 749.412)" fill="#1E293B" stroke="#334155">
                                    </circle>
                                    <circle cx="384.1" cy="1027.05" r="10.438"
                                        transform="rotate(-180 384.1 1027.05)" stroke="#334155"></circle>
                                    <circle cx="283.9" cy="924.763" r="10.438"
                                        transform="rotate(-180 283.9 924.763)" stroke="#334155"></circle>
                                    <circle cx="183.699" cy="870.487" r="10.438"
                                        transform="rotate(-180 183.699 870.487)" stroke="#334155"></circle>
                                    <circle cx="283.9" cy="738.975" r="10.438"
                                        transform="rotate(-180 283.9 738.975)" fill="#1E293B" stroke="#334155">
                                    </circle>
                                    <circle cx="83.5" cy="695.138" r="10.438"
                                        transform="rotate(-180 83.5 695.138)" fill="#1E293B" stroke="#334155">
                                    </circle>
                                    <circle cx="83.5" cy="484.3" r="10.438"
                                        transform="rotate(-180 83.5 484.3)" fill="#0EA5E9" fill-opacity=".42"
                                        stroke="#0EA5E9"></circle>
                                    <circle cx="484.301" cy="432.112" r="10.438"
                                        transform="rotate(-180 484.301 432.112)" fill="#1E293B" stroke="#334155">
                                    </circle>
                                    <circle cx="584.5" cy="432.112" r="10.438"
                                        transform="rotate(-180 584.5 432.112)" fill="#1E293B" stroke="#334155">
                                    </circle>
                                    <circle cx="584.5" cy="642.95" r="10.438"
                                        transform="rotate(-180 584.5 642.95)" fill="#1E293B" stroke="#334155">
                                    </circle>
                                    <circle cx="484.301" cy="851.699" r="10.438"
                                        transform="rotate(-180 484.301 851.699)" stroke="#334155"></circle>
                                    <circle cx="384.1" cy="256.763" r="10.438"
                                        transform="rotate(-180 384.1 256.763)" stroke="#334155"></circle>
                                </g>
                            </svg>
                        </div>
                        <div class="relative flex justify-center "><img alt="" src="{{ asset('img/bg-blur-cyan.png') }}"
                                width="530" height="530" decoding="async" data-nimg="future"
                                class="absolute -top-64 -right-64"><img alt=""
                                src="{{ asset('img/bg-blur-indigo.png') }}" width="567" height="567"
                                decoding="async" data-nimg="future" class="absolute -bottom-40 -right-44">
{{--                            <svg  version="1.0" xmlns="http://www.w3.org/2000/svg"  width="300.000000pt" height="300.000000pt" viewBox="0 0 300.000000 300.000000"  preserveAspectRatio="xMidYMid meet">  <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="#ffffff" stroke="none"> <path d="M600 2675 c0 -4 6 -18 14 -34 8 -15 49 -119 91 -232 l77 -204 164 -165 163 -166 3 99 3 100 99 -157 c54 -86 101 -155 103 -152 3 2 -11 44 -30 93 -19 48 -72 192 -117 318 -45 127 -84 237 -87 245 -3 8 -15 -43 -26 -115 -11 -71 -22 -132 -24 -134 -2 -3 -10 4 -17 15 -8 11 -89 110 -181 219 -92 110 -179 217 -194 237 -23 34 -41 48 -41 33z m267 -369 c59 -71 120 -138 135 -150 27 -19 28 -19 48 -1 11 10 24 31 28 47 4 16 12 29 17 30 8 0 62 -130 64 -155 1 -4 -8 -3 -20 3 -27 15 -55 -9 -65 -54 -3 -17 -9 -35 -11 -40 -8 -12 -222 203 -244 247 -18 35 -79 192 -79 204 0 16 31 -16 127 -131z"/> <path d="M2194 2376 c-26 -20 -6 -43 24 -27 18 10 32 6 32 -10 0 -4 -11 -10 -25 -13 -25 -6 -25 -7 -10 -42 17 -41 19 -54 7 -54 -5 0 -14 18 -21 40 -12 40 -12 40 -37 24 -22 -15 -24 -21 -18 -60 4 -30 3 -44 -5 -44 -6 0 -11 15 -11 33 0 42 -6 48 -36 35 -28 -13 -30 -25 -7 -50 9 -10 13 -21 9 -26 -5 -4 -16 4 -25 18 -35 52 -64 80 -83 80 -14 0 -18 -5 -14 -16 3 -9 6 -17 6 -19 0 -2 8 -1 19 2 24 6 39 -17 18 -29 -13 -7 -14 -14 -6 -35 5 -14 7 -28 4 -31 -7 -7 -9 -4 -32 53 -14 36 -25 50 -39 50 -27 0 -24 -29 4 -33 27 -4 28 -13 2 -30 -15 -9 -20 -23 -20 -52 0 -22 -4 -40 -10 -40 -5 0 -9 30 -9 66 1 36 -1 68 -4 70 -2 2 -25 -5 -51 -17 -67 -29 -51 -56 22 -34 16 6 22 3 22 -9 0 -9 -3 -16 -7 -16 -5 0 -19 -9 -31 -18 -23 -18 -23 -20 -8 -55 8 -20 12 -37 7 -37 -10 0 -37 57 -45 97 -4 18 -11 35 -15 38 -10 5 -165 -86 -196 -115 -22 -21 -45 -26 -45 -11 0 17 -60 144 -66 138 -3 -3 7 -28 21 -57 33 -64 28 -76 -5 -14 -23 43 -27 45 -59 40 -41 -6 -80 -31 -89 -57 -7 -17 -9 -16 -19 12 -7 17 -10 29 -7 26 3 -3 29 6 57 19 29 13 61 24 72 24 18 0 18 1 3 16 -15 16 -21 15 -73 -6 -30 -12 -60 -30 -65 -40 -5 -10 -5 -50 1 -101 6 -46 11 -97 13 -114 4 -47 29 -85 108 -168 50 -53 80 -77 96 -77 44 0 132 58 132 87 0 7 -14 42 -32 77 -18 36 -30 67 -27 69 2 2 47 18 99 36 52 18 174 70 270 115 96 46 205 97 243 114 63 29 67 33 67 64 0 34 -30 94 -58 116 -20 15 -24 15 -48 -2z m-386 -238 c-2 -7 -40 -31 -85 -53 -44 -22 -93 -48 -107 -58 -15 -10 -33 -16 -39 -14 -14 4 46 44 148 99 76 41 89 45 83 26z m-321 -44 c59 -78 86 -104 103 -104 10 0 57 18 105 40 88 40 115 48 115 31 0 -14 -15 -22 -110 -56 -108 -39 -124 -60 -96 -132 30 -75 27 -93 -17 -116 l-39 -20 -65 64 c-77 77 -82 84 -99 168 -19 90 -18 98 15 132 38 38 54 37 88 -7z"/> <path d="M2138 2353 c-19 -5 -24 -28 -9 -37 4 -3 17 1 27 9 22 16 10 34 -18 28z"/> <path d="M2052 2312 c-37 -18 -37 -39 -1 -34 13 2 34 4 47 5 23 2 26 6 16 31 -8 20 -20 19 -62 -2z"/> <path d="M890 1975 c0 -3 18 -41 40 -85 22 -44 37 -80 33 -80 -5 0 -48 13 -98 29 -261 85 -395 118 -323 80 12 -6 79 -52 148 -100 115 -80 132 -89 194 -99 38 -6 107 -20 153 -30 46 -11 86 -20 89 -20 3 0 -16 25 -42 55 -26 31 -45 57 -42 60 2 2 49 -14 103 -36 55 -21 103 -38 108 -36 5 1 -42 38 -105 82 -62 43 -146 103 -185 132 -40 29 -73 51 -73 48z m138 -148 c7 -8 7 -18 2 -27 -6 -8 -10 -25 -10 -37 0 -27 -1 -27 -104 -7 -73 15 -154 49 -143 61 3 2 44 -6 92 -19 l88 -23 26 33 c29 36 34 38 49 19z"/> <path d="M1545 1610 c-296 -4 -364 -8 -382 -20 -13 -8 -23 -18 -23 -23 0 -7 57 -3 139 9 32 5 33 4 27 -19 -4 -18 -1 -27 10 -31 8 -3 12 -11 9 -16 -5 -8 -15 -6 -31 4 -13 9 -45 16 -72 16 -78 0 -82 -9 -82 -188 0 -95 -4 -152 -10 -152 -6 0 -10 56 -10 148 l0 147 -65 0 c-35 -1 -67 -4 -70 -7 -4 -3 -3 -50 1 -104 8 -105 22 -106 23 -3 1 62 15 83 53 77 22 -3 23 -6 26 -120 l3 -118 -25 0 c-14 0 -43 6 -63 14 -21 8 -92 24 -158 36 -130 23 -260 59 -342 96 -59 25 -147 83 -139 91 7 7 152 -25 184 -40 20 -10 73 -14 200 -14 95 0 175 -3 179 -6 3 -3 9 -27 14 -54 14 -75 24 -68 24 18 l0 79 -45 0 c-76 1 -224 11 -229 16 -3 2 -11 -6 -18 -18 l-13 -23 -6 24 -7 24 -18 -24 -19 -24 0 23 c0 26 -15 29 -29 5 -10 -17 -11 -16 -17 4 -5 17 -16 23 -57 28 -84 11 -255 53 -285 70 l-27 16 30 -5 c207 -38 349 -56 493 -63 201 -10 252 -7 252 13 0 8 7 17 15 20 34 13 10 19 -82 19 -54 0 -240 8 -412 18 -196 10 -318 14 -324 8 -5 -5 -7 -16 -5 -23 8 -20 224 -168 306 -209 83 -42 250 -90 402 -115 58 -10 108 -22 111 -27 4 -5 35 -12 69 -16 39 -5 67 -14 75 -24 6 -9 37 -20 71 -26 84 -13 111 -26 133 -62 28 -47 35 -101 21 -176 -12 -64 -16 -70 -93 -147 -77 -77 -79 -81 -53 -84 17 -2 37 5 54 20 15 13 45 32 65 43 39 20 48 35 22 35 -19 0 -20 -3 16 77 27 61 30 76 27 145 -5 113 -43 157 -164 187 -51 12 -68 21 -65 31 3 8 7 75 10 148 7 153 9 156 89 147 29 -3 61 -1 72 5 12 7 229 9 632 8 l613 -3 -120 -43 c-216 -79 -440 -204 -512 -286 -38 -42 -48 -95 -40 -205 3 -51 13 -95 31 -135 14 -32 26 -60 26 -62 0 -2 -18 3 -39 11 -22 7 -61 16 -88 20 -47 6 -47 6 32 -28 44 -18 102 -48 129 -65 50 -32 96 -42 96 -21 0 6 -27 37 -59 68 -46 45 -62 68 -75 111 -16 55 -20 201 -7 250 8 30 109 108 215 168 160 89 374 167 570 206 43 9 79 16 81 16 1 0 5 12 8 28 4 20 -1 34 -21 55 l-26 27 -414 0 c-373 0 -417 -2 -443 -17 -16 -10 -29 -21 -29 -25 0 -4 203 -6 450 -5 248 1 450 -1 450 -4 0 -16 -139 -19 -777 -19 -543 0 -684 3 -680 13 3 9 65 12 263 13 232 0 262 2 287 18 15 10 27 22 27 27 0 5 -1 8 -2 7 -2 -1 -165 -5 -363 -8z"/> <path d="M1017 1532 c-10 -10 -17 -22 -17 -25 0 -4 26 -7 59 -7 50 0 59 3 64 19 7 27 0 31 -48 31 -28 0 -47 -6 -58 -18z"/> <path d="M1984 842 c29 -56 112 -136 188 -181 l53 -31 -77 0 c-76 0 -78 1 -170 56 -74 46 -164 84 -198 84 -3 0 24 -16 59 -36 36 -20 98 -59 140 -87 67 -45 84 -51 141 -56 52 -5 65 -10 68 -24 10 -50 -48 -59 -169 -28 -211 55 -491 55 -751 0 -121 -26 -153 -23 -153 11 0 23 4 25 61 30 34 3 70 12 80 20 60 46 124 103 124 110 0 16 -36 -2 -95 -46 -58 -43 -62 -44 -132 -44 -40 0 -73 2 -73 4 0 2 24 18 53 34 80 46 223 199 204 218 -3 3 -21 -6 -42 -20 -20 -14 -52 -28 -71 -32 -28 -5 -37 -14 -52 -48 -11 -23 -40 -67 -65 -99 -47 -57 -47 -57 -41 -114 4 -32 11 -64 17 -70 14 -19 100 -16 192 6 200 47 538 52 692 9 43 -12 115 -23 160 -26 95 -4 96 -3 105 97 5 50 3 57 -22 80 -39 36 -100 129 -100 152 0 10 -6 19 -14 19 -7 0 -40 13 -72 30 -32 16 -60 30 -62 30 -1 0 9 -22 22 -48z"/> <path d="M1426 787 c-28 -20 -17 -52 18 -52 36 0 56 26 37 49 -16 19 -31 20 -55 3z m54 -16 c0 -10 -25 -21 -48 -21 -15 1 -14 3 2 15 22 17 46 20 46 6z"/> </g> </svg>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative mx-auto flex max-w-8xl justify-center sm:px-2 lg:px-8 xl:px-12">
            <div class="hidden lg:relative lg:block lg:flex-none">
                <div class="absolute inset-y-0 right-0 w-[50vw] bg-slate-50 dark:hidden"></div>
                <div class="sticky top-[4.5rem] -ml-0.5 h-[calc(100vh-4.5rem)] overflow-y-auto py-16 pl-0.5">
                    <div
                        class="absolute top-16 bottom-0 right-0 hidden h-12 w-px bg-gradient-to-t from-slate-800 dark:block">
                    </div>
                    <div class="absolute top-28 bottom-0 right-0 hidden w-px bg-slate-800 dark:block"></div>
                    <nav class="text-base lg:text-sm w-64 pr-8 xl:w-72 xl:pr-16">
                        <ul role="list" class="space-y-9">
                            <li>
                                <h2 class="font-display font-medium text-slate-900 dark:text-white">Generator</h2>
                                <ul role="list"
                                    class="mt-2 space-y-2 border-l-2 border-slate-100 dark:border-slate-800 lg:mt-4 lg:space-y-4 lg:border-slate-200">
                                    <li class="relative">
                                        <a class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full font-semibold text-sky-500 before:bg-sky-500"
                                            href="/#content">Content</a>
                                    </li>
                                    <ul role="list" class="mt-2 space-y-2 border-slate-100 dark:border-slate-800 lg:mt-4 lg:space-y-4 lg:border-slate-200">
                                        <li class="relative">
                                            <a class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full font-semibold text-white hover:text-sky-500 before:bg-sky-500"
                                                href="/#link-forge-sentence">Forge Sentence</a>
                                        </li>
                                        <li class="relative">
                                            <a class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full font-semibold text-white hover:text-sky-500 before:bg-sky-500"
                                                href="/#link-forge-password">Forge Password</a>
                                        </li>
                                        <li class="relative">
                                            <a class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full font-semibold text-white hover:text-sky-500 before:bg-sky-500"
                                                href="/#link-forge-paragraph">Forge Paragraph</a>
                                        </li>
                                        <li class="relative">
                                            <a class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full font-semibold text-white hover:text-sky-500 before:bg-sky-500"
                                                href="/#link-forge-username">Forge Username</a>
                                        </li>
                                        <li class="relative">
                                            <a class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full font-semibold text-white hover:text-sky-500 before:bg-sky-500"
                                                href="/#link-forge-avatar">Forge Avatar</a>
                                        </li>
                                        <li class="relative">
                                            <a class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full font-semibold text-white hover:text-sky-500 before:bg-sky-500"
                                                href="/#link-forge-cat">Forge Cat</a>
                                        </li>
                                    </ul>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="content" class="custom-prose prose prose-slate dark:prose-invert dark:text-slate-400 prose-headings:scroll-mt-28 prose-headings:font-display prose-headings:font-normal lg:prose-headings:scroll-mt-[8.5rem] prose-lead:text-slate-500 dark:prose-lead:text-slate-400 prose-a:font-semibold dark:prose-a:text-sky-400 prose-a:no-underline prose-a:shadow-[inset_0_-2px_0_0_var(--tw-prose-background,#fff),inset_0_calc(-1*(var(--tw-prose-underline-size,4px)+2px))_0_0_var(--tw-prose-underline,theme(colors.sky.300))] hover:prose-a:[--tw-prose-underline-size:6px] dark:[--tw-prose-background:theme(colors.slate.900)] dark:prose-a:shadow-[inset_0_calc(-1*var(--tw-prose-underline-size,2px))_0_0_var(--tw-prose-underline,theme(colors.sky.800))] dark:hover:prose-a:[--tw-prose-underline-size:6px] prose-pre:rounded-xl prose-pre:bg-slate-900 prose-pre:shadow-lg dark:prose-pre:bg-slate-800/60 dark:prose-pre:shadow-none dark:prose-pre:ring-1 dark:prose-pre:ring-slate-300/10 dark:prose-hr:border-slate-800 min-w-0 max-w-2xl flex-auto px-4 py-16 lg:max-w-none lg:pr-0 lg:pl-8 xl:px-16">
                <article>
                    <header class="mb-9 space-y-1">
                        <p class="font-display text-sm font-medium text-sky-500">Basics</p>
                        <h1 class="font-display text-3xl tracking-tight text-slate-900 dark:text-white">Content Forge
                        </h1>
                    </header>
                    <div
                        class="custom-prose prose prose-slate max-w-none dark:prose-invert dark:text-slate-400 prose-headings:scroll-mt-28 prose-headings:font-display prose-headings:font-normal lg:prose-headings:scroll-mt-[8.5rem] prose-lead:text-slate-500 dark:prose-lead:text-slate-400 prose-a:font-semibold dark:prose-a:text-sky-400 prose-a:no-underline prose-a:shadow-[inset_0_-2px_0_0_var(--tw-prose-background,#fff),inset_0_calc(-1*(var(--tw-prose-underline-size,4px)+2px))_0_0_var(--tw-prose-underline,theme(colors.sky.300))] hover:prose-a:[--tw-prose-underline-size:6px] dark:[--tw-prose-background:theme(colors.slate.900)] dark:prose-a:shadow-[inset_0_calc(-1*var(--tw-prose-underline-size,2px))_0_0_var(--tw-prose-underline,theme(colors.sky.800))] dark:hover:prose-a:[--tw-prose-underline-size:6px] prose-pre:rounded-xl prose-pre:bg-slate-900 prose-pre:shadow-lg dark:prose-pre:bg-slate-800/60 dark:prose-pre:shadow-none dark:prose-pre:ring-1 dark:prose-pre:ring-slate-300/10 dark:prose-hr:border-slate-800">

                        <hr>

                        @livewire('forge-sentence')

                        <hr>

                        @livewire('forge-password')

                        <hr>

                        @livewire('forge-paragraph')

                        <hr>

                        @livewire('forge-username')

                        <hr>

                        @livewire('forge-avatar')

                        <hr>

                        @livewire('forge-cat')

                    </div>
                </article>
                <dl class="mt-12 flex border-t border-slate-200 pt-6 dark:border-slate-800">
                    <div class="ml-auto text-right">
                        <dt class="font-display text-sm font-medium text-slate-900 dark:text-white">Next</dt>
                        <dd class="mt-1"><a
                                class="text-base font-semibold text-slate-500 hover:text-slate-600 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/docs/installation">Installation
                                <!-- --> <span aria-hidden="true">→</span>
                            </a></dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
    @stack('modals')

    @livewireScripts
</body>

</html>
