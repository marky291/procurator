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

                    <div className="grid grid-cols-12 gap-5">
                        <div className="col-span-2">
                            <div className="mt-8 overflow-hidden">
                                <a href="" class="hover:bg-gray-200 border block p-4 font-bold">General</a>
                            </div>
                        </div>
                        <div className="col-span-10">
                            <div className="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                                <div className="grid grid-cols-1 md:grid-cols-2">
                                    <div className="p-6">
                                        <div className="flex items-center">
                                            <div className="ml-4 text-lg leading-7 font-semibold">
                                                <h3 class="font-bold">Sentence Gnerator</h3>
                                            </div>
                                        </div>
                                        <div className="ml-4">
                                            <div className="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {/* Split into components they follow same format but different data inputs? */}
                            <div className="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                                <div className="grid grid-cols-1 md:grid-cols-2">
                                    <div className="p-6">
                                        <div className="flex items-center">
                                            <div className="ml-4 text-lg leading-7 font-semibold">
                                                <h3 class="font-bold">Another Gnerator</h3>
                                            </div>
                                        </div>
                                        <div className="ml-4">
                                            <div className="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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
