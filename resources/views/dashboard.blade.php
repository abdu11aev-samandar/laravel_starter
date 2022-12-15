<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(auth()->user()->role->name == 'manager')
                        <h2 class="text-2xl font-bold text-center">Received Applications</h2>

                        <!-- component -->
                        <!-- This is an example component -->
                        <div class='flex justify-center mt-5'>
                            <div class="rounded-xl border p-5 shadow-md bg-white">
                                <div class="flex w-full items-center justify-between border-b pb-3">
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
                                        <div class="text-lg font-bold text-slate-700">Joe Smith</div>
                                    </div>
                                    <div class="flex items-center space-x-8">
                                        <button
                                            class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">id
                                            : 5
                                        </button>
                                        <div class="text-xs text-neutral-500">2 hours ago</div>
                                    </div>
                                </div>

                                <div class="mt-4 mb-6">
                                    <div class="mb-3 text-xl font-bold">Nulla sed leo tempus, feugiat velit vel, rhoncus
                                        neque?
                                    </div>
                                    <div class="text-sm text-neutral-600">Aliquam a tristique sapien, nec bibendum urna.
                                        Maecenas convallis dignissim turpis, non suscipit mauris interdum at. Morbi sed
                                        gravida nisl, a pharetra nulla. Etiam tincidunt turpis leo, ut mollis ipsum
                                        consectetur quis. Etiam faucibus est risus, ac condimentum mauris consequat nec.
                                        Curabitur eget feugiat massa
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center justify-between text-slate-500">
                                        <div class="flex space-x-4 md:space-x-8">
                                            <div
                                                class="flex cursor-pointer items-center transition hover:text-slate-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round"
                                                          d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25"/>
                                                </svg>
                                                <span>xkas2001@gmail.com</span>
                                            </div>
                                            <div
                                                class="flex cursor-pointer items-center transition hover:text-slate-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/>
                                                </svg>
                                                <span>url</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- component -->
                        <!-- This is an example component -->
                        <div class='flex justify-center mt-5'>
                            <div class="rounded-xl border p-5 shadow-md bg-white">
                                <div class="flex w-full items-center justify-between border-b pb-3">
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
                                        <div class="text-lg font-bold text-slate-700">Joe Smith</div>
                                    </div>
                                    <div class="flex items-center space-x-8">
                                        <button
                                            class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">id
                                            : 5
                                        </button>
                                        <div class="text-xs text-neutral-500">2 hours ago</div>
                                    </div>
                                </div>

                                <div class="mt-4 mb-6">
                                    <div class="mb-3 text-xl font-bold">Nulla sed leo tempus, feugiat velit vel, rhoncus
                                        neque?
                                    </div>
                                    <div class="text-sm text-neutral-600">Aliquam a tristique sapien, nec bibendum urna.
                                        Maecenas convallis dignissim turpis, non suscipit mauris interdum at. Morbi sed
                                        gravida nisl, a pharetra nulla. Etiam tincidunt turpis leo, ut mollis ipsum
                                        consectetur quis. Etiam faucibus est risus, ac condimentum mauris consequat nec.
                                        Curabitur eget feugiat massa
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center justify-between text-slate-500">
                                        <div class="flex space-x-4 md:space-x-8">
                                            <div
                                                class="flex cursor-pointer items-center transition hover:text-slate-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round"
                                                          d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25"/>
                                                </svg>
                                                <span>xkas2001@gmail.com</span>
                                            </div>
                                            <div
                                                class="flex cursor-pointer items-center transition hover:text-slate-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/>
                                                </svg>
                                                <span>url</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- component -->
                        <div
                            class='flex items-center justify-center'>
                            <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
                                <div class='max-w-md mx-auto space-y-6'>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <h2 class="text-2xl font-bold text-center">Submit your application</h2>
                                        <hr class="my-6">
                                        <label class="uppercase text-sm font-bold opacity-70">Subject</label>
                                        <input type="text"
                                               class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                        <label class="uppercase text-sm font-bold opacity-70">Message</label>
                                        <textarea rows="5" type="text" class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded"></textarea>
                                        <label class="uppercase text-sm font-bold opacity-70">File</label>
                                        <input type="file"
                                               class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                        <input type="submit"
                                               class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300"
                                               value="Send">
                                    </form>

                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
