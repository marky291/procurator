import React from 'react';
import { Link, Head } from '@inertiajs/inertia-react';

export default function Welcome(props) {
    return (
        <>
            <Head title="Welcome" />

            <div className="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                <div className="fixed top-0 right-0 px-6 py-4 sm:block">
                    {props.auth.user ? (
                        <Link href={route('dashboard')} className="text-sm text-gray-700 underline">
                            Dashboard
                        </Link>
                    ) : (
                        <>
                            <Link href={route('login')} className="text-sm text-gray-700 underline">
                                Log in
                            </Link>

                            <Link href={route('register')} className="ml-4 text-sm text-gray-700 underline">
                                Register
                            </Link>
                        </>
                    )}
                </div>


                <div className="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div className="my-24">
                        <h1 className="inline bg-gradient-to-r from-indigo-200 via-sky-400 to-indigo-200 bg-clip-text font-display text-5xl tracking-tight text-transparent py-12">Lorem Generator By Alex & Marky.</h1>
                    </div>
                    <div className="grid grid-cols-12 gap-24">
                        <div className="col-span-2">
                            <div className="hidden lg:relative lg:block lg:flex-none">
                                <div className="absolute inset-y-0 right-0 w-[50vw] bg-slate-50 dark:hidden"></div>
                                <div
                                    className="sticky top-[4.5rem] -ml-0.5 h-[calc(100vh-4.5rem)] overflow-y-auto py-16 pl-0.5">
                                    <div
                                        className="absolute top-16 bottom-0 right-0 hidden h-12 w-px bg-gradient-to-t from-slate-800 dark:block"></div>
                                    <div
                                        className="absolute top-28 bottom-0 right-0 hidden w-px bg-slate-800 dark:block"></div>
                                    <nav className="text-base lg:text-sm w-64 pr-8 xl:w-72 xl:pr-16">
                                        <ul role="list" className="space-y-9">
                                            <li><h2
                                                className="font-display font-medium text-slate-900 dark:text-white">Introduction</h2>
                                                <ul role="list"
                                                    className="mt-2 space-y-2 border-l-2 border-slate-100 dark:border-slate-800 lg:mt-4 lg:space-y-4 lg:border-slate-200">
                                                    <li className="relative"><a
                                                        className="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full font-semibold text-sky-500 before:bg-sky-500"
                                                        href="/">Getting started</a></li>
                                                    <li className="relative"><a
                                                        className="block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300"
                                                        href="/docs/installation">Installation</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div className="col-span-10">
                            <div className="relative">
                                <div
                                    className="absolute inset-0 rounded-2xl bg-gradient-to-tr from-sky-300 via-sky-300/70 to-blue-300 opacity-10 blur-lg"></div>
                                <div
                                    className="absolute inset-0 rounded-2xl bg-gradient-to-tr from-sky-300 via-sky-300/70 to-blue-300 opacity-10"></div>
                                <div className="relative rounded-2xl bg-[#0A101F]/80 ring-1 ring-white/10 backdrop-blur">
                                    <div
                                        className="absolute -top-px left-20 right-11 h-px bg-gradient-to-r from-sky-300/0 via-sky-300/70 to-sky-300/0"></div>
                                    <div
                                        className="absolute -bottom-px left-11 right-20 h-px bg-gradient-to-r from-blue-400/0 via-blue-400 to-blue-400/0"></div>
                                    <div className="grid grid-cols-1 md:grid-cols-2">
                                        <div className="p-6">
                                            <div className="flex items-center">
                                                <div className="ml-4 text-lg leading-7 font-semibold">
                                                    <h3 className="font-bold dark:text-gray-300 text-gray-700">Sentence
                                                        Gnerator</h3>
                                                </div>
                                            </div>
                                            <div className="ml-4">
                                                <div className="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                                    ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make a type specimen book. It has survived not
                                                    only five centuries, but also the leap into electronic typesetting,
                                                    remaining essentially unchanged. It was popularised in the 1960s
                                                    with the release of Letraset sheets containing Lorem Ipsum passages,
                                                    and more recently with desktop publishing software like Aldus
                                                    PageMaker including versions of Lorem Ipsum.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}
