<!DOCTYPE html>
<html class="antialiased [font-feature-settings:'ss01'] dark js-focus-visible" data-theme="dark"
      lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        class="sticky top-0 z-50 flex flex-wrap items-center justify-between bg-white px-4 py-5 shadow-md shadow-slate-900/5 transition duration-500 dark:shadow-none sm:px-6 lg:px-8 dark:bg-transparent">
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
                        <path d="M18 17.5L10.308 5h15.144l7.933 12.5M18 17.5h15.385L25.452 30H10.308L18 17.5z"></path>
                    </g>
                </svg>
                <svg aria-hidden="true" viewBox="0 0 227 36" fill="none"
                     class="hidden h-9 w-auto fill-slate-700 dark:fill-sky-100 lg:block">
                    <g fill="none" stroke="#38BDF8" stroke-linejoin="round" stroke-width="3">
                        <path d="M10.308 5L18 17.5 10.308 30 2.615 17.5 10.308 5z"></path>
                        <path d="M18 17.5L10.308 5h15.144l7.933 12.5M18 17.5h15.385L25.452 30H10.308L18 17.5z"></path>
                    </g>
                    <path
                        d="M55.96 26.2c-1.027 0-1.973-.173-2.84-.52a6.96 6.96 0 01-2.24-1.5 6.979 6.979 0 01-1.46-2.3c-.347-.893-.52-1.867-.52-2.92 0-1.027.18-1.973.54-2.84a6.71 6.71 0 011.52-2.28 6.922 6.922 0 012.3-1.52 7.48 7.48 0 012.86-.54c.667 0 1.32.093 1.96.28a6.12 6.12 0 011.78.78 5.7 5.7 0 011.4 1.24l-1.88 2.08a6.272 6.272 0 00-1-.82 3.728 3.728 0 00-1.08-.54 3.542 3.542 0 00-1.2-.2 4.14 4.14 0 00-1.62.32 3.991 3.991 0 00-1.3.9 4.197 4.197 0 00-.9 1.38 4.755 4.755 0 00-.32 1.78c0 .667.107 1.273.32 1.82.213.533.513.993.9 1.38.387.373.847.667 1.38.88.547.2 1.147.3 1.8.3a4.345 4.345 0 002.34-.68c.347-.213.653-.46.92-.74l1.46 2.34c-.32.36-.753.687-1.3.98a7.784 7.784 0 01-1.8.7c-.667.16-1.34.24-2.02.24zm6.99-.2l5.48-14h2.68l5.46 14h-3.08l-2.82-7.54c-.08-.213-.18-.487-.3-.82a922.595 922.595 0 00-.68-2.12 13.694 13.694 0 01-.24-.86l.54-.02c-.08.307-.174.627-.28.96-.094.32-.194.653-.3 1-.108.333-.22.66-.34.98-.12.32-.234.633-.34.94L65.91 26h-2.96zm2.54-2.94l.98-2.42h6.42l1 2.42h-8.4zm19.794 3.14c-1.026 0-1.973-.173-2.84-.52a6.96 6.96 0 01-2.24-1.5 6.98 6.98 0 01-1.46-2.3c-.346-.893-.52-1.867-.52-2.92 0-1.027.18-1.973.54-2.84a6.71 6.71 0 011.52-2.28 6.923 6.923 0 012.3-1.52 7.48 7.48 0 012.86-.54c.667 0 1.32.093 1.96.28a6.118 6.118 0 011.78.78c.547.347 1.014.76 1.4 1.24l-1.88 2.08a6.272 6.272 0 00-1-.82 3.728 3.728 0 00-1.08-.54 3.542 3.542 0 00-1.2-.2 4.14 4.14 0 00-1.62.32 3.992 3.992 0 00-1.3.9 4.197 4.197 0 00-.9 1.38 4.755 4.755 0 00-.32 1.78c0 .667.107 1.273.32 1.82.214.533.514.993.9 1.38.387.373.847.667 1.38.88.547.2 1.147.3 1.8.3a4.345 4.345 0 002.34-.68 4.53 4.53 0 00.92-.74l1.46 2.34c-.32.36-.753.687-1.3.98a7.784 7.784 0 01-1.8.7c-.666.16-1.34.24-2.02.24zm17.469-.2V12h3v14h-3zm-8.82 0V12h3v14h-3zm1.2-5.62l.02-2.72h9.14v2.72h-9.16zM110.402 26V12h9.46v2.64h-6.54v8.72h6.68V26h-9.6zm1.4-5.86v-2.56h7.1v2.56h-7.1zM122.437 26l5.48-14h2.68l5.46 14h-3.08l-2.82-7.54c-.08-.213-.18-.487-.3-.82l-.34-1.06-.34-1.06a14.73 14.73 0 01-.24-.86l.54-.02c-.08.307-.173.627-.28.96a63.3 63.3 0 01-.3 1c-.106.333-.22.66-.34.98-.12.32-.233.633-.34.94l-2.82 7.48h-2.96zm2.54-2.94l.98-2.42h6.42l1 2.42h-8.4zM139.023 26V12h5.74c1.027 0 1.953.173 2.78.52.84.333 1.56.813 2.16 1.44a6.097 6.097 0 011.4 2.2c.32.853.48 1.8.48 2.84 0 1.027-.16 1.973-.48 2.84a6.438 6.438 0 01-1.38 2.22 6.394 6.394 0 01-2.16 1.44c-.84.333-1.773.5-2.8.5h-5.74zm3-2.18l-.32-.52h2.96c.6 0 1.14-.1 1.62-.3.48-.213.887-.5 1.22-.86.347-.373.607-.827.78-1.36.173-.533.26-1.127.26-1.78a5.56 5.56 0 00-.26-1.76 3.595 3.595 0 00-.78-1.36 3.323 3.323 0 00-1.22-.86 3.948 3.948 0 00-1.62-.32h-3.02l.38-.48v9.6zM158.671 26l-5.58-14h3.18l2.92 7.58c.16.413.293.78.4 1.1.12.307.22.6.3.88.093.267.18.533.26.8.08.253.16.533.24.84l-.58.02c.107-.413.213-.793.32-1.14.107-.36.227-.733.36-1.12.133-.387.3-.847.5-1.38l2.76-7.58h3.16l-5.62 14h-2.62zm8.114 0l5.48-14h2.68l5.46 14h-3.08l-2.82-7.54c-.08-.213-.18-.487-.3-.82l-.34-1.06-.34-1.06a13.293 13.293 0 01-.24-.86l.54-.02c-.08.307-.173.627-.28.96a63.3 63.3 0 01-.3 1c-.107.333-.22.66-.34.98-.12.32-.233.633-.34.94l-2.82 7.48h-2.96zm2.54-2.94l.98-2.42h6.42l1 2.42h-8.4zM183.371 26V12h2.68l7.74 10.46h-.56c-.054-.413-.1-.813-.14-1.2l-.12-1.2c-.027-.413-.054-.833-.08-1.26-.014-.44-.027-.9-.04-1.38a56.825 56.825 0 01-.02-1.6V12h2.94v14h-2.72l-7.9-10.56.76.02c.066.693.12 1.287.16 1.78a36.623 36.623 0 01.18 2.2c.026.267.04.52.04.76.013.24.02.493.02.76V26h-2.94zm23.175.2c-1.027 0-1.973-.173-2.84-.52-.853-.36-1.6-.86-2.24-1.5a6.979 6.979 0 01-1.46-2.3c-.347-.893-.52-1.867-.52-2.92 0-1.027.18-1.973.54-2.84a6.71 6.71 0 011.52-2.28 6.919 6.919 0 012.3-1.52 7.48 7.48 0 012.86-.54c.667 0 1.32.093 1.96.28a6.12 6.12 0 011.78.78 5.7 5.7 0 011.4 1.24l-1.88 2.08a6.259 6.259 0 00-1-.82 3.721 3.721 0 00-1.08-.54 3.54 3.54 0 00-1.2-.2 4.14 4.14 0 00-1.62.32 3.991 3.991 0 00-1.3.9 4.206 4.206 0 00-.9 1.38 4.76 4.76 0 00-.32 1.78c0 .667.107 1.273.32 1.82.213.533.513.993.9 1.38.387.373.847.667 1.38.88.547.2 1.147.3 1.8.3a4.35 4.35 0 002.34-.68c.347-.213.653-.46.92-.74l1.46 2.34c-.32.36-.753.687-1.3.98a7.773 7.773 0 01-1.8.7c-.667.16-1.34.24-2.02.24zm8.649-.2V12h9.46v2.64h-6.54v8.72h6.68V26h-9.6zm1.4-5.86v-2.56h7.1v2.56h-7.1z"></path>
                </svg>
            </a></div>
        <div class="-my-5 mr-6 sm:mr-8 md:mr-0">
            <button type="button"
                    class="group flex h-6 w-6 items-center justify-center sm:justify-start md:h-auto md:w-80 md:flex-none md:rounded-lg md:py-2.5 md:pl-4 md:pr-3.5 md:text-sm md:ring-1 md:ring-slate-200 md:hover:ring-slate-300 dark:md:bg-slate-800/75 dark:md:ring-inset dark:md:ring-white/5 dark:md:hover:bg-slate-700/40 dark:md:hover:ring-slate-500 lg:w-96">
                <svg aria-hidden="true" viewBox="0 0 20 20"
                     class="h-5 w-5 flex-none fill-slate-400 group-hover:fill-slate-500 dark:fill-slate-500 md:group-hover:fill-slate-400">
                    <path
                        d="M16.293 17.707a1 1 0 0 0 1.414-1.414l-1.414 1.414ZM9 14a5 5 0 0 1-5-5H2a7 7 0 0 0 7 7v-2ZM4 9a5 5 0 0 1 5-5V2a7 7 0 0 0-7 7h2Zm5-5a5 5 0 0 1 5 5h2a7 7 0 0 0-7-7v2Zm8.707 12.293-3.757-3.757-1.414 1.414 3.757 3.757 1.414-1.414ZM14 9a4.98 4.98 0 0 1-1.464 3.536l1.414 1.414A6.98 6.98 0 0 0 16 9h-2Zm-1.464 3.536A4.98 4.98 0 0 1 9 14v2a6.98 6.98 0 0 0 4.95-2.05l-1.414-1.414Z"></path>
                </svg>
                <span class="sr-only md:not-sr-only md:ml-2 md:text-slate-500 md:dark:text-slate-400">Search docs</span><kbd
                    class="ml-auto hidden font-medium text-slate-400 dark:text-slate-500 md:block"><kbd
                        class="font-sans">⌘</kbd><kbd class="font-sans">K</kbd></kbd></button>
        </div>
        <div class="relative flex basis-0 justify-end gap-6 sm:gap-8 md:flex-grow">
            <div class="relative z-10"><label class="sr-only" id="headlessui-listbox-label-:R1j36:">Theme</label>
                <button
                    class="flex h-6 w-6 items-center justify-center rounded-lg shadow-md shadow-black/5 ring-1 ring-black/5 dark:bg-slate-700 dark:ring-inset dark:ring-white/5"
                    id="headlessui-listbox-button-:R2j36:" type="button" aria-haspopup="true" aria-expanded="false"
                    aria-labelledby="headlessui-listbox-label-:R1j36: headlessui-listbox-button-:R2j36:"
                    aria-label="Dark">
                    <svg aria-hidden="true" viewBox="0 0 16 16"
                         class="hidden h-4 w-4 fill-sky-400 [[data-theme=light]_ ]:block">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M7 1a1 1 0 0 1 2 0v1a1 1 0 1 1-2 0V1Zm4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm2.657-5.657a1 1 0 0 0-1.414 0l-.707.707a1 1 0 0 0 1.414 1.414l.707-.707a1 1 0 0 0 0-1.414Zm-1.415 11.313-.707-.707a1 1 0 0 1 1.415-1.415l.707.708a1 1 0 0 1-1.415 1.414ZM16 7.999a1 1 0 0 0-1-1h-1a1 1 0 1 0 0 2h1a1 1 0 0 0 1-1ZM7 14a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm-2.536-2.464a1 1 0 0 0-1.414 0l-.707.707a1 1 0 0 0 1.414 1.414l.707-.707a1 1 0 0 0 0-1.414Zm0-8.486A1 1 0 0 1 3.05 4.464l-.707-.707a1 1 0 0 1 1.414-1.414l.707.707ZM3 8a1 1 0 0 0-1-1H1a1 1 0 0 0 0 2h1a1 1 0 0 0 1-1Z"></path>
                    </svg>
                    <svg aria-hidden="true" viewBox="0 0 16 16"
                         class="hidden h-4 w-4 fill-sky-400 [[data-theme=dark]_ ]:block">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M7.23 3.333C7.757 2.905 7.68 2 7 2a6 6 0 1 0 0 12c.68 0 .758-.905.23-1.332A5.989 5.989 0 0 1 5 8c0-1.885.87-3.568 2.23-4.668ZM12 5a1 1 0 0 1 1 1 1 1 0 0 0 1 1 1 1 0 1 1 0 2 1 1 0 0 0-1 1 1 1 0 1 1-2 0 1 1 0 0 0-1-1 1 1 0 1 1 0-2 1 1 0 0 0 1-1 1 1 0 0 1 1-1Z"></path>
                    </svg>
                    <svg aria-hidden="true" viewBox="0 0 16 16"
                         class="hidden h-4 w-4 fill-slate-400 [:not(.dark)[data-theme=system]_ ]:block">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M7 1a1 1 0 0 1 2 0v1a1 1 0 1 1-2 0V1Zm4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm2.657-5.657a1 1 0 0 0-1.414 0l-.707.707a1 1 0 0 0 1.414 1.414l.707-.707a1 1 0 0 0 0-1.414Zm-1.415 11.313-.707-.707a1 1 0 0 1 1.415-1.415l.707.708a1 1 0 0 1-1.415 1.414ZM16 7.999a1 1 0 0 0-1-1h-1a1 1 0 1 0 0 2h1a1 1 0 0 0 1-1ZM7 14a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm-2.536-2.464a1 1 0 0 0-1.414 0l-.707.707a1 1 0 0 0 1.414 1.414l.707-.707a1 1 0 0 0 0-1.414Zm0-8.486A1 1 0 0 1 3.05 4.464l-.707-.707a1 1 0 0 1 1.414-1.414l.707.707ZM3 8a1 1 0 0 0-1-1H1a1 1 0 0 0 0 2h1a1 1 0 0 0 1-1Z"></path>
                    </svg>
                    <svg aria-hidden="true" viewBox="0 0 16 16"
                         class="hidden h-4 w-4 fill-slate-400 [.dark[data-theme=system]_ ]:block">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M7.23 3.333C7.757 2.905 7.68 2 7 2a6 6 0 1 0 0 12c.68 0 .758-.905.23-1.332A5.989 5.989 0 0 1 5 8c0-1.885.87-3.568 2.23-4.668ZM12 5a1 1 0 0 1 1 1 1 1 0 0 0 1 1 1 1 0 1 1 0 2 1 1 0 0 0-1 1 1 1 0 1 1-2 0 1 1 0 0 0-1-1 1 1 0 1 1 0-2 1 1 0 0 0 1-1 1 1 0 0 1 1-1Z"></path>
                    </svg>
                </button>
            </div>
            <a class="group" aria-label="GitHub" href="https://github.com">
                <svg aria-hidden="true" viewBox="0 0 16 16"
                     class="h-6 w-6 fill-slate-400 group-hover:fill-slate-500 dark:group-hover:fill-slate-300">
                    <path
                        d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C13.71 14.53 16 11.53 16 8C16 3.58 12.42 0 8 0Z"></path>
                </svg>
            </a></div>
    </header>
    <div
        class="overflow-hidden bg-slate-900 dark:-mb-32 dark:mt-[-4.5rem] dark:pb-32 dark:pt-[4.5rem] dark:lg:mt-[-4.75rem] dark:lg:pt-[4.75rem]">
        <div class="py-16 sm:px-2 lg:relative lg:py-20 lg:px-0">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-y-16 gap-x-8 px-4 lg:max-w-8xl lg:grid-cols-2 lg:px-8 xl:gap-x-16 xl:px-12">
                <div class="relative z-10 md:text-center lg:text-left"><img alt=""
                                                                            src="{{ asset('img/bg-blur-cyan.png') }}"
                                                                            width="530" height="530" decoding="async"
                                                                            data-nimg="future"
                                                                            class="absolute bottom-full right-full -mr-72 -mb-56 opacity-50">
                    <div class="relative"><p
                            class="inline bg-gradient-to-r from-indigo-200 via-sky-400 to-indigo-200 bg-clip-text font-display text-5xl tracking-tight text-transparent">
                            Never miss the cache again.</p>
                        <p class="mt-3 text-2xl tracking-tight text-slate-400">Cache every single thing your app could
                            ever do ahead of time, so your code never even has to run at all.</p>
                        <div class="mt-8 flex gap-4 md:justify-center lg:justify-start">
                            <x-primary-button url="/" name="Get started"/>
                            <x-secondary-button url="/" name="View on GitHub"/>
                        </div>
                    </div>
                </div>
                <div class="relative lg:static xl:pl-10">
                    <div
                        class="absolute inset-x-[-50vw] -top-32 -bottom-48 [mask-image:linear-gradient(transparent,white,white)] dark:[mask-image:linear-gradient(transparent,white,transparent)] lg:left-[calc(50%+14rem)] lg:right-0 lg:-top-32 lg:-bottom-32 lg:[mask-image:none] lg:dark:[mask-image:linear-gradient(white,white,transparent)]">
                        <svg aria-hidden="true" viewBox="0 0 668 1069" width="668" height="1069" fill="none"
                             class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 lg:translate-y-[-60%]">
                            <defs>
                                <clipPath id=":R1l6:-clip-path">
                                    <path fill="#fff" transform="rotate(-180 334 534.4)" d="M0 0h668v1068.8H0z"></path>
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
                                <circle cx="83.5" cy="384.1" r="10.438" transform="rotate(-180 83.5 384.1)"
                                        fill="#1E293B" stroke="#334155"></circle>
                                <circle cx="83.5" cy="200.399" r="10.438" transform="rotate(-180 83.5 200.399)"
                                        stroke="#334155"></circle>
                                <circle cx="83.5" cy="81.412" r="10.438" transform="rotate(-180 83.5 81.412)"
                                        stroke="#334155"></circle>
                                <circle cx="183.699" cy="375.75" r="10.438" transform="rotate(-180 183.699 375.75)"
                                        fill="#1E293B" stroke="#334155"></circle>
                                <circle cx="183.699" cy="563.625" r="10.438" transform="rotate(-180 183.699 563.625)"
                                        fill="#1E293B" stroke="#334155"></circle>
                                <circle cx="384.1" cy="651.3" r="10.438" transform="rotate(-180 384.1 651.3)"
                                        fill="#1E293B" stroke="#334155"></circle>
                                <circle cx="484.301" cy="574.062" r="10.438" transform="rotate(-180 484.301 574.062)"
                                        fill="#0EA5E9" fill-opacity=".42" stroke="#0EA5E9"></circle>
                                <circle cx="384.1" cy="749.412" r="10.438" transform="rotate(-180 384.1 749.412)"
                                        fill="#1E293B" stroke="#334155"></circle>
                                <circle cx="384.1" cy="1027.05" r="10.438" transform="rotate(-180 384.1 1027.05)"
                                        stroke="#334155"></circle>
                                <circle cx="283.9" cy="924.763" r="10.438" transform="rotate(-180 283.9 924.763)"
                                        stroke="#334155"></circle>
                                <circle cx="183.699" cy="870.487" r="10.438" transform="rotate(-180 183.699 870.487)"
                                        stroke="#334155"></circle>
                                <circle cx="283.9" cy="738.975" r="10.438" transform="rotate(-180 283.9 738.975)"
                                        fill="#1E293B" stroke="#334155"></circle>
                                <circle cx="83.5" cy="695.138" r="10.438" transform="rotate(-180 83.5 695.138)"
                                        fill="#1E293B" stroke="#334155"></circle>
                                <circle cx="83.5" cy="484.3" r="10.438" transform="rotate(-180 83.5 484.3)"
                                        fill="#0EA5E9" fill-opacity=".42" stroke="#0EA5E9"></circle>
                                <circle cx="484.301" cy="432.112" r="10.438" transform="rotate(-180 484.301 432.112)"
                                        fill="#1E293B" stroke="#334155"></circle>
                                <circle cx="584.5" cy="432.112" r="10.438" transform="rotate(-180 584.5 432.112)"
                                        fill="#1E293B" stroke="#334155"></circle>
                                <circle cx="584.5" cy="642.95" r="10.438" transform="rotate(-180 584.5 642.95)"
                                        fill="#1E293B" stroke="#334155"></circle>
                                <circle cx="484.301" cy="851.699" r="10.438" transform="rotate(-180 484.301 851.699)"
                                        stroke="#334155"></circle>
                                <circle cx="384.1" cy="256.763" r="10.438" transform="rotate(-180 384.1 256.763)"
                                        stroke="#334155"></circle>
                            </g>
                        </svg>
                    </div>
                    <div class="relative"><img alt="" src="{{ asset('img/bg-blur-cyan.png') }}" width="530"
                                               height="530" decoding="async" data-nimg="future"
                                               class="absolute -top-64 -right-64"><img alt=""
                                                                                       src="{{ asset('img/bg-blur-indigo.png') }}"
                                                                                       width="567" height="567"
                                                                                       decoding="async"
                                                                                       data-nimg="future"
                                                                                       class="absolute -bottom-40 -right-44">
                        <div
                            class="absolute inset-0 rounded-2xl bg-gradient-to-tr from-sky-300 via-sky-300/70 to-blue-300 opacity-10 blur-lg"></div>
                        <div
                            class="absolute inset-0 rounded-2xl bg-gradient-to-tr from-sky-300 via-sky-300/70 to-blue-300 opacity-10"></div>
                        <div class="relative rounded-2xl bg-[#0A101F]/80 ring-1 ring-white/10 backdrop-blur">
                            <div
                                class="absolute -top-px left-20 right-11 h-px bg-gradient-to-r from-sky-300/0 via-sky-300/70 to-sky-300/0"></div>
                            <div
                                class="absolute -bottom-px left-11 right-20 h-px bg-gradient-to-r from-blue-400/0 via-blue-400 to-blue-400/0"></div>
                            <div class="pl-4 pt-4">
                                <svg aria-hidden="true" viewBox="0 0 42 10" fill="none"
                                     class="h-2.5 w-auto stroke-slate-500/30">
                                    <circle cx="5" cy="5" r="4.5"></circle>
                                    <circle cx="21" cy="5" r="4.5"></circle>
                                    <circle cx="37" cy="5" r="4.5"></circle>
                                </svg>
                                <div class="mt-4 flex space-x-2 text-xs">
                                    <div
                                        class="flex h-6 rounded-full bg-gradient-to-r from-sky-400/30 via-sky-400 to-sky-400/30 p-px font-medium text-sky-300">
                                        <div class="flex items-center rounded-full px-2.5 bg-slate-800">
                                            cache-advance.config.js
                                        </div>
                                    </div>
                                    <div class="flex h-6 rounded-full text-slate-500">
                                        <div class="flex items-center rounded-full px-2.5">package.json</div>
                                    </div>
                                </div>
                                <div class="mt-6 flex items-start px-1 text-sm">
                                    <div aria-hidden="true"
                                         class="select-none border-r border-slate-300/5 pr-4 font-mono text-slate-600">
                                        01<br>02<br>03<br>04<br>05<br>06<br>07<br></div>
                                    <pre class="prism-code language-javascript flex overflow-x-auto pb-6"><code
                                            class="px-4"><div class="token-line"><span class="token keyword module">export</span><span
                                                    class="token plain"> </span><span class="token keyword module">default</span><span
                                                    class="token plain"> </span><span class="token punctuation">{</span><span
                                                    class="token plain"></span></div><div class="token-line"><span
                                                    class="token plain">  </span><span
                                                    class="token literal-property property">strategy</span><span
                                                    class="token operator">:</span><span
                                                    class="token plain"> </span><span
                                                    class="token string">'predictive'</span><span
                                                    class="token punctuation">,</span><span class="token plain"></span></div><div
                                                class="token-line"><span class="token plain">  </span><span
                                                    class="token literal-property property">engine</span><span
                                                    class="token operator">:</span><span
                                                    class="token plain"> </span><span class="token punctuation">{</span><span
                                                    class="token plain"></span></div><div class="token-line"><span
                                                    class="token plain">    </span><span
                                                    class="token literal-property property">cpus</span><span
                                                    class="token operator">:</span><span
                                                    class="token plain"> </span><span
                                                    class="token number">12</span><span
                                                    class="token punctuation">,</span><span class="token plain"></span></div><div
                                                class="token-line"><span class="token plain">    </span><span
                                                    class="token literal-property property">backups</span><span
                                                    class="token operator">:</span><span
                                                    class="token plain"> </span><span class="token punctuation">[</span><span
                                                    class="token string">'./storage/cache.wtf'</span><span
                                                    class="token punctuation">]</span><span
                                                    class="token punctuation">,</span><span class="token plain"></span></div><div
                                                class="token-line"><span class="token plain">  </span><span
                                                    class="token punctuation">}</span><span
                                                    class="token punctuation">,</span><span class="token plain"></span></div><div
                                                class="token-line"><span class="token plain"></span><span
                                                    class="token punctuation">}</span></div></code></pre>
                                </div>
                            </div>
                        </div>
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
                    class="absolute top-16 bottom-0 right-0 hidden h-12 w-px bg-gradient-to-t from-slate-800 dark:block"></div>
                <div class="absolute top-28 bottom-0 right-0 hidden w-px bg-slate-800 dark:block"></div>
                <nav class="text-base lg:text-sm w-64 pr-8 xl:w-72 xl:pr-16">
                    <ul role="list" class="space-y-9">
                        <li><h2 class="font-display font-medium text-slate-900 dark:text-white">Introduction</h2>
                            <ul role="list"
                                class="mt-2 space-y-2 border-l-2 border-slate-100 dark:border-slate-800 lg:mt-4 lg:space-y-4 lg:border-slate-200">
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full font-semibold text-sky-500 before:bg-sky-500"
                                        href="/">Getting started</a></li>
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/installation">Installation</a></li>
                            </ul>
                        </li>
                        <li><h2 class="font-display font-medium text-slate-900 dark:text-white">Core concepts</h2>
                            <ul role="list"
                                class="mt-2 space-y-2 border-l-2 border-slate-100 dark:border-slate-800 lg:mt-4 lg:space-y-4 lg:border-slate-200">
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/understanding-caching">Understanding caching</a></li>
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/predicting-user-behavior">Predicting user behavior</a></li>
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/basics-of-time-travel">Basics of time-travel</a></li>
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/introduction-to-string-theory">Introduction to string theory</a>
                                </li>
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/the-butterfly-effect">The butterfly effect</a></li>
                            </ul>
                        </li>
                        <li><h2 class="font-display font-medium text-slate-900 dark:text-white">Advanced guides</h2>
                            <ul role="list"
                                class="mt-2 space-y-2 border-l-2 border-slate-100 dark:border-slate-800 lg:mt-4 lg:space-y-4 lg:border-slate-200">
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/writing-plugins">Writing plugins</a></li>
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/neuralink-integration">Neuralink integration</a></li>
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/temporal-paradoxes">Temporal paradoxes</a></li>
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/testing">Testing</a></li>
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/compile-time-caching">Compile-time caching</a></li>
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/predictive-data-generation">Predictive data generation</a></li>
                            </ul>
                        </li>
                        <li><h2 class="font-display font-medium text-slate-900 dark:text-white">API reference</h2>
                            <ul role="list"
                                class="mt-2 space-y-2 border-l-2 border-slate-100 dark:border-slate-800 lg:mt-4 lg:space-y-4 lg:border-slate-200">
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/cacheadvance-predict">CacheAdvance.predict()</a></li>
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/cacheadvance-flush">CacheAdvance.flush()</a></li>
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/cacheadvance-revert">CacheAdvance.revert()</a></li>
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/cacheadvance-regret">CacheAdvance.regret()</a></li>
                            </ul>
                        </li>
                        <li><h2 class="font-display font-medium text-slate-900 dark:text-white">Contributing</h2>
                            <ul role="list"
                                class="mt-2 space-y-2 border-l-2 border-slate-100 dark:border-slate-800 lg:mt-4 lg:space-y-4 lg:border-slate-200">
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/how-to-contribute">How to contribute</a></li>
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/architecture-guide">Architecture guide</a></li>
                                <li class="relative"><a
                                        class="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                        href="/docs/design-principles">Design principles</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="min-w-0 max-w-2xl flex-auto px-4 py-16 lg:max-w-none lg:pr-0 lg:pl-8 xl:px-16">
            <article>
                <header class="mb-9 space-y-1"><p class="font-display text-sm font-medium text-sky-500">Introduction</p>
                    <h1 class="font-display text-3xl tracking-tight text-slate-900 dark:text-white">Getting started</h1>
                </header>
                <div
                    class="prose prose-slate max-w-none dark:prose-invert dark:text-slate-400 prose-headings:scroll-mt-28 prose-headings:font-display prose-headings:font-normal lg:prose-headings:scroll-mt-[8.5rem] prose-lead:text-slate-500 dark:prose-lead:text-slate-400 prose-a:font-semibold dark:prose-a:text-sky-400 prose-a:no-underline prose-a:shadow-[inset_0_-2px_0_0_var(--tw-prose-background,#fff),inset_0_calc(-1*(var(--tw-prose-underline-size,4px)+2px))_0_0_var(--tw-prose-underline,theme(colors.sky.300))] hover:prose-a:[--tw-prose-underline-size:6px] dark:[--tw-prose-background:theme(colors.slate.900)] dark:prose-a:shadow-[inset_0_calc(-1*var(--tw-prose-underline-size,2px))_0_0_var(--tw-prose-underline,theme(colors.sky.800))] dark:hover:prose-a:[--tw-prose-underline-size:6px] prose-pre:rounded-xl prose-pre:bg-slate-900 prose-pre:shadow-lg dark:prose-pre:bg-slate-800/60 dark:prose-pre:shadow-none dark:prose-pre:ring-1 dark:prose-pre:ring-slate-300/10 dark:prose-hr:border-slate-800">
                    <p class="lead">Learn how to get CacheAdvance set up in your project in under thirty minutes or it's
                        free. </p>
                    <div class="not-prose my-12 grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div class="group relative rounded-xl border border-slate-200 dark:border-slate-800">
                            <div
                                class="absolute -inset-px rounded-xl border-2 border-transparent opacity-0 [background:linear-gradient(var(--quick-links-hover-bg,theme(colors.sky.50)),var(--quick-links-hover-bg,theme(colors.sky.50)))_padding-box,linear-gradient(to_top,theme(colors.indigo.400),theme(colors.cyan.400),theme(colors.sky.500))_border-box] group-hover:opacity-100 dark:[--quick-links-hover-bg:theme(colors.slate.800)]"></div>
                            <div class="relative overflow-hidden rounded-xl p-6">
                                <svg aria-hidden="true" viewBox="0 0 32 32" fill="none"
                                     class="h-8 w-8 [--icon-foreground:theme(colors.slate.900)] [--icon-background:theme(colors.white)]">
                                    <defs>
                                        <radialGradient cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                                        id=":R1h19n6:-gradient"
                                                        gradientTransform="matrix(0 21 -21 0 12 3)">
                                            <stop stop-color="#0EA5E9"></stop>
                                            <stop stop-color="#22D3EE" offset=".527"></stop>
                                            <stop stop-color="#818CF8" offset="1"></stop>
                                        </radialGradient>
                                        <radialGradient cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                                        id=":R1h19n6:-gradient-dark"
                                                        gradientTransform="matrix(0 21 -21 0 16 7)">
                                            <stop stop-color="#0EA5E9"></stop>
                                            <stop stop-color="#22D3EE" offset=".527"></stop>
                                            <stop stop-color="#818CF8" offset="1"></stop>
                                        </radialGradient>
                                    </defs>
                                    <g class="dark:hidden">
                                        <circle cx="12" cy="12" r="12" fill="url(#:R1h19n6:-gradient)"></circle>
                                        <path d="m8 8 9 21 2-10 10-2L8 8Z" fill-opacity="0.5"
                                              class="fill-[var(--icon-background)] stroke-[color:var(--icon-foreground)]"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                    <g class="hidden dark:inline">
                                        <path d="m4 4 10.286 24 2.285-11.429L28 14.286 4 4Z"
                                              fill="url(#:R1h19n6:-gradient-dark)"
                                              stroke="url(#:R1h19n6:-gradient-dark)" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                <h2 class="mt-4 font-display text-base text-slate-900 dark:text-white"><a href="/"><span
                                            class="absolute -inset-px rounded-xl"></span>Installation</a></h2>
                                <p class="mt-1 text-sm text-slate-700 dark:text-slate-400">Step-by-step guides to
                                    setting up your system and installing the library.</p></div>
                        </div>
                        <div class="group relative rounded-xl border border-slate-200 dark:border-slate-800">
                            <div
                                class="absolute -inset-px rounded-xl border-2 border-transparent opacity-0 [background:linear-gradient(var(--quick-links-hover-bg,theme(colors.sky.50)),var(--quick-links-hover-bg,theme(colors.sky.50)))_padding-box,linear-gradient(to_top,theme(colors.indigo.400),theme(colors.cyan.400),theme(colors.sky.500))_border-box] group-hover:opacity-100 dark:[--quick-links-hover-bg:theme(colors.slate.800)]"></div>
                            <div class="relative overflow-hidden rounded-xl p-6">
                                <svg aria-hidden="true" viewBox="0 0 32 32" fill="none"
                                     class="h-8 w-8 [--icon-foreground:theme(colors.slate.900)] [--icon-background:theme(colors.white)]">
                                    <defs>
                                        <radialGradient cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                                        id=":R1i19n6:-gradient"
                                                        gradientTransform="matrix(0 21 -21 0 20 3)">
                                            <stop stop-color="#0EA5E9"></stop>
                                            <stop stop-color="#22D3EE" offset=".527"></stop>
                                            <stop stop-color="#818CF8" offset="1"></stop>
                                        </radialGradient>
                                        <radialGradient cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                                        id=":R1i19n6:-gradient-dark"
                                                        gradientTransform="matrix(0 22.75 -22.75 0 16 6.25)">
                                            <stop stop-color="#0EA5E9"></stop>
                                            <stop stop-color="#22D3EE" offset=".527"></stop>
                                            <stop stop-color="#818CF8" offset="1"></stop>
                                        </radialGradient>
                                    </defs>
                                    <g class="dark:hidden">
                                        <circle cx="20" cy="12" r="12" fill="url(#:R1i19n6:-gradient)"></circle>
                                        <g class="fill-[var(--icon-background)] stroke-[color:var(--icon-foreground)]"
                                           fill-opacity="0.5" stroke-width="2" stroke-linecap="round"
                                           stroke-linejoin="round">
                                            <path
                                                d="M3 5v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2Z"></path>
                                            <path
                                                d="M18 17v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V17a2 2 0 0 0-2-2h-7a2 2 0 0 0-2 2Z"></path>
                                            <path
                                                d="M18 5v4a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-7a2 2 0 0 0-2 2Z"></path>
                                            <path
                                                d="M3 25v2a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2Z"></path>
                                        </g>
                                    </g>
                                    <g class="hidden dark:inline" fill="url(#:R1i19n6:-gradient-dark)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3 17V4a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm16 10v-9a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-6a2 2 0 0 1-2-2Zm0-23v5a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-8a1 1 0 0 0-1 1ZM3 28v-3a1 1 0 0 1 1-1h9a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Z"></path>
                                        <path
                                            d="M2 4v13h2V4H2Zm2-2a2 2 0 0 0-2 2h2V2Zm8 0H4v2h8V2Zm2 2a2 2 0 0 0-2-2v2h2Zm0 13V4h-2v13h2Zm-2 2a2 2 0 0 0 2-2h-2v2Zm-8 0h8v-2H4v2Zm-2-2a2 2 0 0 0 2 2v-2H2Zm16 1v9h2v-9h-2Zm3-3a3 3 0 0 0-3 3h2a1 1 0 0 1 1-1v-2Zm6 0h-6v2h6v-2Zm3 3a3 3 0 0 0-3-3v2a1 1 0 0 1 1 1h2Zm0 9v-9h-2v9h2Zm-3 3a3 3 0 0 0 3-3h-2a1 1 0 0 1-1 1v2Zm-6 0h6v-2h-6v2Zm-3-3a3 3 0 0 0 3 3v-2a1 1 0 0 1-1-1h-2Zm2-18V4h-2v5h2Zm0 0h-2a2 2 0 0 0 2 2V9Zm8 0h-8v2h8V9Zm0 0v2a2 2 0 0 0 2-2h-2Zm0-5v5h2V4h-2Zm0 0h2a2 2 0 0 0-2-2v2Zm-8 0h8V2h-8v2Zm0 0V2a2 2 0 0 0-2 2h2ZM2 25v3h2v-3H2Zm2-2a2 2 0 0 0-2 2h2v-2Zm9 0H4v2h9v-2Zm2 2a2 2 0 0 0-2-2v2h2Zm0 3v-3h-2v3h2Zm-2 2a2 2 0 0 0 2-2h-2v2Zm-9 0h9v-2H4v2Zm-2-2a2 2 0 0 0 2 2v-2H2Z"></path>
                                    </g>
                                </svg>
                                <h2 class="mt-4 font-display text-base text-slate-900 dark:text-white"><a href="/"><span
                                            class="absolute -inset-px rounded-xl"></span>Architecture guide</a></h2>
                                <p class="mt-1 text-sm text-slate-700 dark:text-slate-400">Learn how the internals work
                                    and contribute.</p></div>
                        </div>
                        <div class="group relative rounded-xl border border-slate-200 dark:border-slate-800">
                            <div
                                class="absolute -inset-px rounded-xl border-2 border-transparent opacity-0 [background:linear-gradient(var(--quick-links-hover-bg,theme(colors.sky.50)),var(--quick-links-hover-bg,theme(colors.sky.50)))_padding-box,linear-gradient(to_top,theme(colors.indigo.400),theme(colors.cyan.400),theme(colors.sky.500))_border-box] group-hover:opacity-100 dark:[--quick-links-hover-bg:theme(colors.slate.800)]"></div>
                            <div class="relative overflow-hidden rounded-xl p-6">
                                <svg aria-hidden="true" viewBox="0 0 32 32" fill="none"
                                     class="h-8 w-8 [--icon-foreground:theme(colors.slate.900)] [--icon-background:theme(colors.white)]">
                                    <defs>
                                        <radialGradient cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                                        id=":R1j19n6:-gradient"
                                                        gradientTransform="matrix(0 21 -21 0 20 11)">
                                            <stop stop-color="#0EA5E9"></stop>
                                            <stop stop-color="#22D3EE" offset=".527"></stop>
                                            <stop stop-color="#818CF8" offset="1"></stop>
                                        </radialGradient>
                                        <radialGradient cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                                        id=":R1j19n6:-gradient-dark-1"
                                                        gradientTransform="matrix(0 22.75 -22.75 0 16 6.25)">
                                            <stop stop-color="#0EA5E9"></stop>
                                            <stop stop-color="#22D3EE" offset=".527"></stop>
                                            <stop stop-color="#818CF8" offset="1"></stop>
                                        </radialGradient>
                                        <radialGradient cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                                        id=":R1j19n6:-gradient-dark-2"
                                                        gradientTransform="matrix(0 14 -14 0 16 10)">
                                            <stop stop-color="#0EA5E9"></stop>
                                            <stop stop-color="#22D3EE" offset=".527"></stop>
                                            <stop stop-color="#818CF8" offset="1"></stop>
                                        </radialGradient>
                                    </defs>
                                    <g class="dark:hidden">
                                        <circle cx="20" cy="20" r="12" fill="url(#:R1j19n6:-gradient)"></circle>
                                        <g fill-opacity="0.5"
                                           class="fill-[var(--icon-background)] stroke-[color:var(--icon-foreground)]"
                                           stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 9v14l12 6V15L3 9Z"></path>
                                            <path d="M27 9v14l-12 6V15l12-6Z"></path>
                                        </g>
                                        <path d="M11 4h8v2l6 3-10 6L5 9l6-3V4Z" fill-opacity="0.5"
                                              class="fill-[var(--icon-background)]"></path>
                                        <g class="stroke-[color:var(--icon-foreground)]" stroke-width="2"
                                           stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 5.5 27 9l-12 6L3 9l7-3.5"></path>
                                            <path
                                                d="M20 5c0 1.105-2.239 2-5 2s-5-.895-5-2m10 0c0-1.105-2.239-2-5-2s-5 .895-5 2m10 0v3c0 1.105-2.239 2-5 2s-5-.895-5-2V5"></path>
                                        </g>
                                    </g>
                                    <g class="hidden dark:inline" stroke-width="2" stroke-linecap="round"
                                       stroke-linejoin="round">
                                        <path
                                            d="M17.676 3.38a3.887 3.887 0 0 0-3.352 0l-9 4.288C3.907 8.342 3 9.806 3 11.416v9.168c0 1.61.907 3.073 2.324 3.748l9 4.288a3.887 3.887 0 0 0 3.352 0l9-4.288C28.093 23.657 29 22.194 29 20.584v-9.168c0-1.61-.907-3.074-2.324-3.748l-9-4.288Z"
                                            stroke="url(#:R1j19n6:-gradient-dark-1)"></path>
                                        <path
                                            d="M16.406 8.087a.989.989 0 0 0-.812 0l-7 3.598A1.012 1.012 0 0 0 8 12.61v6.78c0 .4.233.762.594.925l7 3.598a.989.989 0 0 0 .812 0l7-3.598c.361-.163.594-.525.594-.925v-6.78c0-.4-.233-.762-.594-.925l-7-3.598Z"
                                            fill="url(#:R1j19n6:-gradient-dark-2)"
                                            stroke="url(#:R1j19n6:-gradient-dark-2)"></path>
                                    </g>
                                </svg>
                                <h2 class="mt-4 font-display text-base text-slate-900 dark:text-white"><a href="/"><span
                                            class="absolute -inset-px rounded-xl"></span>Plugins</a></h2>
                                <p class="mt-1 text-sm text-slate-700 dark:text-slate-400">Extend the library with
                                    third-party plugins or write your own.</p></div>
                        </div>
                        <div class="group relative rounded-xl border border-slate-200 dark:border-slate-800">
                            <div
                                class="absolute -inset-px rounded-xl border-2 border-transparent opacity-0 [background:linear-gradient(var(--quick-links-hover-bg,theme(colors.sky.50)),var(--quick-links-hover-bg,theme(colors.sky.50)))_padding-box,linear-gradient(to_top,theme(colors.indigo.400),theme(colors.cyan.400),theme(colors.sky.500))_border-box] group-hover:opacity-100 dark:[--quick-links-hover-bg:theme(colors.slate.800)]"></div>
                            <div class="relative overflow-hidden rounded-xl p-6">
                                <svg aria-hidden="true" viewBox="0 0 32 32" fill="none"
                                     class="h-8 w-8 [--icon-foreground:theme(colors.slate.900)] [--icon-background:theme(colors.white)]">
                                    <defs>
                                        <radialGradient cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                                        id=":R1k19n6:-gradient"
                                                        gradientTransform="matrix(0 21 -21 0 12 11)">
                                            <stop stop-color="#0EA5E9"></stop>
                                            <stop stop-color="#22D3EE" offset=".527"></stop>
                                            <stop stop-color="#818CF8" offset="1"></stop>
                                        </radialGradient>
                                        <radialGradient cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                                        id=":R1k19n6:-gradient-dark"
                                                        gradientTransform="matrix(0 24.5 -24.5 0 16 5.5)">
                                            <stop stop-color="#0EA5E9"></stop>
                                            <stop stop-color="#22D3EE" offset=".527"></stop>
                                            <stop stop-color="#818CF8" offset="1"></stop>
                                        </radialGradient>
                                    </defs>
                                    <g class="dark:hidden">
                                        <circle cx="12" cy="20" r="12" fill="url(#:R1k19n6:-gradient)"></circle>
                                        <path d="M27 12.13 19.87 5 13 11.87v14.26l14-14Z"
                                              class="fill-[var(--icon-background)] stroke-[color:var(--icon-foreground)]"
                                              fill-opacity="0.5" stroke-width="2" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <path d="M3 3h10v22a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V3Z"
                                              class="fill-[var(--icon-background)]" fill-opacity="0.5"></path>
                                        <path
                                            d="M3 9v16a4 4 0 0 0 4 4h2a4 4 0 0 0 4-4V9M3 9V3h10v6M3 9h10M3 15h10M3 21h10"
                                            class="stroke-[color:var(--icon-foreground)]" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M29 29V19h-8.5L13 26c0 1.5-2.5 3-5 3h21Z" fill-opacity="0.5"
                                              class="fill-[var(--icon-background)] stroke-[color:var(--icon-foreground)]"
                                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                    <g class="hidden dark:inline">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M3 2a1 1 0 0 0-1 1v21a6 6 0 0 0 12 0V3a1 1 0 0 0-1-1H3Zm16.752 3.293a1 1 0 0 0-1.593.244l-1.045 2A1 1 0 0 0 17 8v13a1 1 0 0 0 1.71.705l7.999-8.045a1 1 0 0 0-.002-1.412l-6.955-6.955ZM26 18a1 1 0 0 0-.707.293l-10 10A1 1 0 0 0 16 30h13a1 1 0 0 0 1-1V19a1 1 0 0 0-1-1h-3ZM5 18a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H5Zm-1-5a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1Zm1-7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H5Z"
                                              fill="url(#:R1k19n6:-gradient-dark)"></path>
                                    </g>
                                </svg>
                                <h2 class="mt-4 font-display text-base text-slate-900 dark:text-white"><a href="/"><span
                                            class="absolute -inset-px rounded-xl"></span>API reference</a></h2>
                                <p class="mt-1 text-sm text-slate-700 dark:text-slate-400">Learn to easily customize and
                                    modify your app's visual design to fit your brand.</p></div>
                        </div>
                    </div>
                    <p>Possimus saepe veritatis sint nobis et quam eos. Architecto consequatur odit perferendis fuga
                        eveniet possimus rerum cumque. Ea deleniti voluptatum deserunt voluptatibus ut non iste.</p>
                    <hr>
                    <h2 id="quick-start">Quick start</h2>
                    <p>Sit commodi iste iure molestias qui amet voluptatem sed quaerat. Nostrum aut pariatur. Sint ipsa
                        praesentium dolor error cumque velit tenetur.</p>
                    <h3 id="installing-dependencies">Installing dependencies</h3>
                    <p>Sit commodi iste iure molestias qui amet voluptatem sed quaerat. Nostrum aut pariatur. Sint ipsa
                        praesentium dolor error cumque velit tenetur quaerat exercitationem. Consequatur et cum atque
                        mollitia qui quia necessitatibus.</p>
                    <pre class="prism-code language-shell"><code><span class="token function">npm</span><span
                                class="token plain"> </span><span class="token function">install</span><span
                                class="token plain"> @tailwindlabs/cache-advance</span>
</code></pre>
                    <p>Possimus saepe veritatis sint nobis et quam eos. Architecto consequatur odit perferendis fuga
                        eveniet possimus rerum cumque. Ea deleniti voluptatum deserunt voluptatibus ut non iste.
                        Provident nam asperiores vel laboriosam omnis ducimus enim nesciunt quaerat. Minus tempora
                        cupiditate est quod.</p>
                    <div
                        class="my-8 flex rounded-3xl p-6 bg-amber-50 dark:bg-slate-800/60 dark:ring-1 dark:ring-slate-300/10">
                        <svg aria-hidden="true" viewBox="0 0 32 32" fill="none"
                             class="h-8 w-8 flex-none [--icon-foreground:theme(colors.amber.900)] [--icon-background:theme(colors.amber.100)]">
                            <defs>
                                <radialGradient cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                                id=":R15pn6:-gradient"
                                                gradientTransform="rotate(65.924 1.519 20.92) scale(25.7391)">
                                    <stop stop-color="#FDE68A" offset=".08"></stop>
                                    <stop stop-color="#F59E0B" offset=".837"></stop>
                                </radialGradient>
                                <radialGradient cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                                id=":R15pn6:-gradient-dark"
                                                gradientTransform="matrix(0 24.5 -24.5 0 16 5.5)">
                                    <stop stop-color="#FDE68A" offset=".08"></stop>
                                    <stop stop-color="#F59E0B" offset=".837"></stop>
                                </radialGradient>
                            </defs>
                            <g class="dark:hidden">
                                <circle cx="20" cy="20" r="12" fill="url(#:R15pn6:-gradient)"></circle>
                                <path d="M3 16c0 7.18 5.82 13 13 13s13-5.82 13-13S23.18 3 16 3 3 8.82 3 16Z"
                                      fill-opacity="0.5"
                                      class="fill-[var(--icon-background)] stroke-[color:var(--icon-foreground)]"
                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="m15.408 16.509-1.04-5.543a1.66 1.66 0 1 1 3.263 0l-1.039 5.543a.602.602 0 0 1-1.184 0Z"
                                    class="fill-[var(--icon-foreground)] stroke-[color:var(--icon-foreground)]"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M16 23a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" fill-opacity="0.5" stroke="currentColor"
                                      class="fill-[var(--icon-background)] stroke-[color:var(--icon-foreground)]"
                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                            <g class="hidden dark:inline">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M2 16C2 8.268 8.268 2 16 2s14 6.268 14 14-6.268 14-14 14S2 23.732 2 16Zm11.386-4.85a2.66 2.66 0 1 1 5.228 0l-1.039 5.543a1.602 1.602 0 0 1-3.15 0l-1.04-5.543ZM16 20a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"
                                      fill="url(#:R15pn6:-gradient-dark)"></path>
                            </g>
                        </svg>
                        <div class="ml-4 flex-auto"><p
                                class="m-0 font-display text-xl text-amber-900 dark:text-amber-500">Oh no! Something bad
                                happened!</p>
                            <div
                                class="prose mt-2.5 text-amber-800 [--tw-prose-underline:theme(colors.amber.400)] [--tw-prose-background:theme(colors.amber.50)] prose-a:text-amber-900 prose-code:text-amber-900 dark:text-slate-300 dark:[--tw-prose-underline:theme(colors.sky.700)] dark:prose-code:text-slate-300">
                                <p>This is what a disclaimer message looks like. You might want to include inline <code>code</code>
                                    in it. Or maybe you’ll want to include a <a href="/">link</a> in it. I don’t think
                                    we should get too carried away with other scenarios like lists or tables — that
                                    would be silly.</p></div>
                        </div>
                    </div>
                    <h3 id="configuring-the-library">Configuring the library</h3>
                    <p>Sit commodi iste iure molestias qui amet voluptatem sed quaerat. Nostrum aut pariatur. Sint ipsa
                        praesentium dolor error cumque velit tenetur quaerat exercitationem. Consequatur et cum atque
                        mollitia qui quia necessitatibus.</p>
                    <pre class="prism-code language-js"><code><span
                                class="token comment">// cache-advance.config.js</span><span class="token plain"></span>
<span class="token plain"></span><span class="token keyword module">export</span><span class="token plain"> </span><span
                                class="token keyword module">default</span><span class="token plain"> </span><span
                                class="token punctuation">{</span><span class="token plain"></span>
<span class="token plain">  </span><span class="token literal-property property">strategy</span><span
                                class="token operator">:</span><span class="token plain"> </span><span
                                class="token string">'predictive'</span><span class="token punctuation">,</span><span
                                class="token plain"></span>
<span class="token plain">  </span><span class="token literal-property property">engine</span><span
                                class="token operator">:</span><span class="token plain"> </span><span
                                class="token punctuation">{</span><span class="token plain"></span>
<span class="token plain">    </span><span class="token literal-property property">cpus</span><span
                                class="token operator">:</span><span class="token plain"> </span><span
                                class="token number">12</span><span class="token punctuation">,</span><span
                                class="token plain"></span>
<span class="token plain">    </span><span class="token literal-property property">backups</span><span
                                class="token operator">:</span><span class="token plain"> </span><span
                                class="token punctuation">[</span><span
                                class="token string">'./storage/cache.wtf'</span><span
                                class="token punctuation">]</span><span class="token punctuation">,</span><span
                                class="token plain"></span>
<span class="token plain">  </span><span class="token punctuation">}</span><span class="token punctuation">,</span><span
                                class="token plain"></span>
<span class="token plain"></span><span class="token punctuation">}</span>
</code></pre>
                    <p>Possimus saepe veritatis sint nobis et quam eos. Architecto consequatur odit perferendis fuga
                        eveniet possimus rerum cumque. Ea deleniti voluptatum deserunt voluptatibus ut non iste.
                        Provident nam asperiores vel laboriosam omnis ducimus enim nesciunt quaerat. Minus tempora
                        cupiditate est quod.</p>
                    <div
                        class="my-8 flex rounded-3xl p-6 bg-sky-50 dark:bg-slate-800/60 dark:ring-1 dark:ring-slate-300/10">
                        <svg aria-hidden="true" viewBox="0 0 32 32" fill="none"
                             class="h-8 w-8 flex-none [--icon-foreground:theme(colors.slate.900)] [--icon-background:theme(colors.white)]">
                            <defs>
                                <radialGradient cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                                id=":R189n6:-gradient" gradientTransform="matrix(0 21 -21 0 20 11)">
                                    <stop stop-color="#0EA5E9"></stop>
                                    <stop stop-color="#22D3EE" offset=".527"></stop>
                                    <stop stop-color="#818CF8" offset="1"></stop>
                                </radialGradient>
                                <radialGradient cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                                id=":R189n6:-gradient-dark"
                                                gradientTransform="matrix(0 24.5001 -19.2498 0 16 5.5)">
                                    <stop stop-color="#0EA5E9"></stop>
                                    <stop stop-color="#22D3EE" offset=".527"></stop>
                                    <stop stop-color="#818CF8" offset="1"></stop>
                                </radialGradient>
                            </defs>
                            <g class="dark:hidden">
                                <circle cx="20" cy="20" r="12" fill="url(#:R189n6:-gradient)"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M20 24.995c0-1.855 1.094-3.501 2.427-4.792C24.61 18.087 26 15.07 26 12.231 26 7.133 21.523 3 16 3S6 7.133 6 12.23c0 2.84 1.389 5.857 3.573 7.973C10.906 21.494 12 23.14 12 24.995V27a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2v-2.005Z"
                                      class="fill-[var(--icon-background)]" fill-opacity="0.5"></path>
                                <path
                                    d="M25 12.23c0 2.536-1.254 5.303-3.269 7.255l1.391 1.436c2.354-2.28 3.878-5.547 3.878-8.69h-2ZM16 4c5.047 0 9 3.759 9 8.23h2C27 6.508 21.998 2 16 2v2Zm-9 8.23C7 7.76 10.953 4 16 4V2C10.002 2 5 6.507 5 12.23h2Zm3.269 7.255C8.254 17.533 7 14.766 7 12.23H5c0 3.143 1.523 6.41 3.877 8.69l1.392-1.436ZM13 27v-2.005h-2V27h2Zm1 1a1 1 0 0 1-1-1h-2a3 3 0 0 0 3 3v-2Zm4 0h-4v2h4v-2Zm1-1a1 1 0 0 1-1 1v2a3 3 0 0 0 3-3h-2Zm0-2.005V27h2v-2.005h-2ZM8.877 20.921C10.132 22.136 11 23.538 11 24.995h2c0-2.253-1.32-4.143-2.731-5.51L8.877 20.92Zm12.854-1.436C20.32 20.852 19 22.742 19 24.995h2c0-1.457.869-2.859 2.122-4.074l-1.391-1.436Z"
                                    class="fill-[var(--icon-foreground)]"></path>
                                <path
                                    d="M20 26a1 1 0 1 0 0-2v2Zm-8-2a1 1 0 1 0 0 2v-2Zm2 0h-2v2h2v-2Zm1 1V13.5h-2V25h2Zm-5-11.5v1h2v-1h-2Zm3.5 4.5h5v-2h-5v2Zm8.5-3.5v-1h-2v1h2ZM20 24h-2v2h2v-2Zm-2 0h-4v2h4v-2Zm-1-10.5V25h2V13.5h-2Zm2.5-2.5a2.5 2.5 0 0 0-2.5 2.5h2a.5.5 0 0 1 .5-.5v-2Zm2.5 2.5a2.5 2.5 0 0 0-2.5-2.5v2a.5.5 0 0 1 .5.5h2ZM18.5 18a3.5 3.5 0 0 0 3.5-3.5h-2a1.5 1.5 0 0 1-1.5 1.5v2ZM10 14.5a3.5 3.5 0 0 0 3.5 3.5v-2a1.5 1.5 0 0 1-1.5-1.5h-2Zm2.5-3.5a2.5 2.5 0 0 0-2.5 2.5h2a.5.5 0 0 1 .5-.5v-2Zm2.5 2.5a2.5 2.5 0 0 0-2.5-2.5v2a.5.5 0 0 1 .5.5h2Z"
                                    class="fill-[var(--icon-foreground)]"></path>
                            </g>
                            <g class="hidden dark:inline">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M16 2C10.002 2 5 6.507 5 12.23c0 3.144 1.523 6.411 3.877 8.691.75.727 1.363 1.52 1.734 2.353.185.415.574.726 1.028.726H12a1 1 0 0 0 1-1v-4.5a.5.5 0 0 0-.5-.5A3.5 3.5 0 0 1 9 14.5V14a3 3 0 1 1 6 0v9a1 1 0 1 0 2 0v-9a3 3 0 1 1 6 0v.5a3.5 3.5 0 0 1-3.5 3.5.5.5 0 0 0-.5.5V23a1 1 0 0 0 1 1h.36c.455 0 .844-.311 1.03-.726.37-.833.982-1.626 1.732-2.353 2.354-2.28 3.878-5.547 3.878-8.69C27 6.507 21.998 2 16 2Zm5 25a1 1 0 0 0-1-1h-8a1 1 0 0 0-1 1 3 3 0 0 0 3 3h4a3 3 0 0 0 3-3Zm-8-13v1.5a.5.5 0 0 1-.5.5 1.5 1.5 0 0 1-1.5-1.5V14a1 1 0 1 1 2 0Zm6.5 2a.5.5 0 0 1-.5-.5V14a1 1 0 1 1 2 0v.5a1.5 1.5 0 0 1-1.5 1.5Z"
                                      fill="url(#:R189n6:-gradient-dark)"></path>
                            </g>
                        </svg>
                        <div class="ml-4 flex-auto"><p class="m-0 font-display text-xl text-sky-900 dark:text-sky-400">
                                You should know!</p>
                            <div
                                class="prose mt-2.5 text-sky-800 [--tw-prose-background:theme(colors.sky.50)] prose-a:text-sky-900 prose-code:text-sky-900 dark:text-slate-300 dark:prose-code:text-slate-300">
                                <p>This is what a disclaimer message looks like. You might want to include inline <code>code</code>
                                    in it. Or maybe you’ll want to include a <a href="/">link</a> in it. I don’t think
                                    we should get too carried away with other scenarios like lists or tables — that
                                    would be silly.</p></div>
                        </div>
                    </div>
                    <hr>
                    <h2 id="basic-usage">Basic usage</h2>
                    <p>Praesentium laudantium magni. Consequatur reiciendis aliquid nihil iusto ut in et. Quisquam ut et
                        aliquid occaecati. Culpa veniam aut et voluptates amet perspiciatis. Qui exercitationem in qui.
                        Vel qui dignissimos sit quae distinctio.</p>
                    <h3 id="your-first-cache">Your first cache</h3>
                    <p>Minima vel non iste debitis. Consequatur repudiandae et quod accusamus sit molestias consequatur
                        aperiam. Et sequi ipsa eum voluptatibus ipsam. Et quisquam ut.</p>
                    <p>Qui quae esse aspernatur fugit possimus. Quam sed molestiae temporibus. Eum perferendis
                        dignissimos provident ea et. Et repudiandae quasi accusamus consequatur dolore nobis. Quia
                        reiciendis necessitatibus a blanditiis iste quia. Ut quis et amet praesentium sapiente.</p>
                    <p>Atque eos laudantium. Optio odit aspernatur consequuntur corporis soluta quidem sunt aut
                        doloribus. Laudantium assumenda commodi.</p>
                    <h3 id="clearing-the-cache">Clearing the cache</h3>
                    <p>Vel aut velit sit dolor aut suscipit at veritatis voluptas. Laudantium tempore praesentium. Qui
                        ut voluptatem.</p>
                    <p>Ea est autem fugiat velit esse a alias earum. Dolore non amet soluta eos libero est. Consequatur
                        qui aliquam qui odit eligendi ut impedit illo dignissimos.</p>
                    <p>Ut dolore qui aut nam. Natus temporibus nisi voluptatum labore est ex error vel officia. Vero
                        repellendus ut. Suscipit voluptate et placeat. Eius quo corporis ab et consequatur quisquam.
                        Nihil officia facere dolorem occaecati alias deleniti deleniti in.</p>
                    <h3 id="adding-middleware">Adding middleware</h3>
                    <p>Officia nobis tempora maiores id iusto magni reprehenderit velit. Quae dolores inventore
                        molestiae perspiciatis aut. Quis sequi officia quasi rem officiis officiis. Nesciunt ut
                        cupiditate. Sunt aliquid explicabo enim ipsa eum recusandae. Vitae sunt eligendi et non beatae
                        minima aut.</p>
                    <p>Harum perferendis aut qui quibusdam tempore laboriosam voluptatum qui sed. Amet error amet totam
                        exercitationem aut corporis accusantium dolorum. Perspiciatis aut animi et. Sed unde error ut
                        aut rerum.</p>
                    <p>Ut quo libero aperiam mollitia est repudiandae quaerat corrupti explicabo. Voluptas accusantium
                        sed et doloribus voluptatem fugiat a mollitia. Numquam est magnam dolorem asperiores fugiat.
                        Soluta et fuga amet alias temporibus quasi velit. Laudantium voluptatum perspiciatis doloribus
                        quasi facere. Eveniet deleniti veniam et quia veritatis minus veniam perspiciatis.</p>
                    <hr>
                    <h2 id="getting-help">Getting help</h2>
                    <p>Consequuntur et aut quisquam et qui consequatur eligendi. Necessitatibus dolorem sit. Excepturi
                        cumque quibusdam soluta ullam rerum voluptatibus. Porro illo sequi consequatur nisi numquam nisi
                        autem. Ut necessitatibus aut. Veniam ipsa voluptatem sed.</p>
                    <h3 id="submit-an-issue">Submit an issue</h3>
                    <p>Inventore et aut minus ut voluptatem nihil commodi doloribus consequatur. Facilis perferendis
                        nihil sit aut aspernatur iure ut dolores et. Aspernatur odit dignissimos. Aut qui est sint
                        sint.</p>
                    <p>Facere aliquam qui. Dolorem officia ipsam adipisci qui molestiae. Error voluptatem reprehenderit
                        ex.</p>
                    <p>Consequatur enim quia maiores aperiam et ipsum dicta. Quam ut sit facere sit quae. Eligendi
                        veritatis aut ut veritatis iste ut adipisci illo.</p>
                    <h3 id="join-the-community">Join the community</h3>
                    <p>Praesentium facilis iste aliquid quo quia a excepturi. Fuga reprehenderit illo sequi voluptatem
                        voluptatem omnis. Id quia consequatur rerum consectetur eligendi et omnis. Voluptates iusto
                        labore possimus provident praesentium id vel harum quisquam. Voluptatem provident corrupti.</p>
                    <p>Eum et ut. Qui facilis est ipsa. Non facere quia sequi commodi autem. Dicta autem sit sequi omnis
                        impedit. Eligendi amet dolorum magnam repudiandae in a.</p>
                    <p>Molestiae iusto ut exercitationem dolorem unde iusto tempora atque nihil. Voluptatem velit facere
                        laboriosam nobis ea. Consequatur rerum velit ipsum ipsam. Et qui saepe consequatur minima
                        laborum tempore voluptatum et. Quia eveniet eaque sequi consequatur nihil eos.</p></div>
            </article>
            <dl class="mt-12 flex border-t border-slate-200 pt-6 dark:border-slate-800">
                <div class="ml-auto text-right">
                    <dt class="font-display text-sm font-medium text-slate-900 dark:text-white">Next</dt>
                    <dd class="mt-1"><a
                            class="text-base font-semibold text-slate-500 hover:text-slate-600 dark:text-slate-400 dark:hover:text-slate-300"
                            href="/docs/installation">Installation<!-- --> <span aria-hidden="true">→</span></a></dd>
                </div>
            </dl>
        </div>
        <div
            class="hidden xl:sticky xl:top-[4.5rem] xl:-mr-6 xl:block xl:h-[calc(100vh-4.5rem)] xl:flex-none xl:overflow-y-auto xl:py-16 xl:pr-6">
            <nav aria-labelledby="on-this-page-title" class="w-56"><h2 id="on-this-page-title"
                                                                       class="font-display text-sm font-medium text-slate-900 dark:text-white">
                    On this page</h2>
                <ol role="list" class="mt-4 space-y-3 text-sm">
                    <li><h3><a class="text-sky-500" href="/#quick-start">Quick start</a></h3>
                        <ol role="list" class="mt-2 space-y-3 pl-5 text-slate-500 dark:text-slate-400">
                            <li><a class="hover:text-slate-600 dark:hover:text-slate-300"
                                   href="/#installing-dependencies">Installing dependencies</a></li>
                            <li><a class="hover:text-slate-600 dark:hover:text-slate-300"
                                   href="/#configuring-the-library">Configuring the library</a></li>
                        </ol>
                    </li>
                    <li><h3>
                            <a class="font-normal text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                               href="/#basic-usage">Basic usage</a></h3>
                        <ol role="list" class="mt-2 space-y-3 pl-5 text-slate-500 dark:text-slate-400">
                            <li><a class="hover:text-slate-600 dark:hover:text-slate-300" href="/#your-first-cache">Your
                                    first cache</a></li>
                            <li><a class="hover:text-slate-600 dark:hover:text-slate-300" href="/#clearing-the-cache">Clearing
                                    the cache</a></li>
                            <li><a class="hover:text-slate-600 dark:hover:text-slate-300" href="/#adding-middleware">Adding
                                    middleware</a></li>
                        </ol>
                    </li>
                    <li><h3>
                            <a class="font-normal text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-300"
                               href="/#getting-help">Getting help</a></h3>
                        <ol role="list" class="mt-2 space-y-3 pl-5 text-slate-500 dark:text-slate-400">
                            <li><a class="hover:text-slate-600 dark:hover:text-slate-300" href="/#submit-an-issue">Submit
                                    an issue</a></li>
                            <li><a class="hover:text-slate-600 dark:hover:text-slate-300" href="/#join-the-community">Join
                                    the community</a></li>
                        </ol>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
</body>
</html>
