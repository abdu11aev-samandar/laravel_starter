<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Applications') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold text-center">My Applications</h2>

                    <!-- component -->
                    <!-- This is an example component -->
                    @foreach($applications as $application)
                        <div class='justify-center mt-5 mb-5'>

                            <div class="rounded-xl border p-5 shadow-md bg-white">
                                <div class="flex w-full items-center justify-between border-b pb-3">
                                    <div class="flex items-center space-x-3">
                                        <div
                                            class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
                                        <div
                                            class="text-lg font-bold text-slate-700">{{ $application->user->name }}</div>
                                    </div>
                                    <div class="flex items-center space-x-8">
                                        <button
                                            class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">
                                            #{{ $application->id }}
                                        </button>
                                        <div class="text-xs text-neutral-500">{{ $application->created_at }}</div>
                                    </div>
                                </div>

                                <div class="flex justify-between">
                                    <div>
                                        <div class="mt-4 mb-6">
                                            <div class="mb-3 text-xl font-bold">{{ $application->subject }}</div>
                                            <div class="text-sm text-neutral-600">{{ $application->message }}</div>
                                        </div>

                                        <div>
                                            <div class="flex items-center justify-between text-slate-500">
                                                <div class="flex space-x-4 md:space-x-8">
                                                    <div
                                                        class="flex cursor-pointer items-center transition hover:text-slate-600">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke-width="1.5" stroke="currentColor"
                                                             class="w-6 h-6">
                                                            <path stroke-linecap="round"
                                                                  d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25"/>
                                                        </svg>
                                                        <span>{{ $application->user->email }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div
                                            class="border m-6 p-6 rounded hover:bg-gray-50 transition cursor-pointer flex flex-col items-center">
                                            @if(is_null($application->file_url))
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                     viewBox="0 0 24 24" stroke-width="1.5"
                                                     stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/>
                                                </svg>
                                                No File
                                            @else
                                                <a href="{{ asset('storage/'.$application->file_url) }}"
                                                   target="_blank">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="1.5"
                                                         stroke="currentColor"
                                                         class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                                                    </svg>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                @if($application->answer()->exists())
                                    <div class="mt-5">
                                        <hr class="mb-5">
                                        <h3 class="mb-3 text-xl font-bold">Answer:</h3>
                                        <p class="text-sm text-neutral-600">{{ $application->answer->body }}</p>
                                    </div>
                                @else
                                    @if(auth()->user()->name == 'manager')
                                        <div class="flex justify-end">
                                            <a href="{{ route('answers.create', ['application' => $application->id]) }}"
                                               type="button"
                                               class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                                Answer
                                            </a>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    @endforeach

                    {{--{{ $applications->links() }}--}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

