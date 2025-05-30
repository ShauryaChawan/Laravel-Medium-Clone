<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            {{-- Tabs --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("You're logged in!") }} --}}

                    <ul
                        class="flex flex-wrap text-sm justify-center font-medium text-center text-gray-500 dark:text-gray-400">
                        <li class="me-2">
                            <a href="#" class="inline-block px-4 py-3 text-white bg-blue-600 rounded-lg active"
                                aria-current="page">All</a>
                        </li>

                        @foreach ($categories as $category)
                            <li class="me-2">
                                <a href="#"
                                    class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach

                    </ul>

                </div>
            </div>

            {{-- Posts --}}
            <div class="mt-8" text-gray-900>

                {{-- @foreach ($posts as $post)
                    <div
                        class="flex mb-10 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">

                        <div class="p-5 flex-1">
                            <a href="{{ $post->slug }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $post->title }}</h5>
                            </a>
                            <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                {{ Str::words($post->content, 20) }}
                            </div>
                            <a href="{{ $post->slug }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>

                        <a href="{{ $post->slug }}">
                            <img class="w-48 h-full rounded-r-lg object-cover"
                                src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                    </div>
                @endforeach --}}

                @forelse ($posts as $post)
                    <div
                        class="flex mb-10 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">

                        <div class="p-5 flex-1">
                            <a href="{{ $post->slug }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $post->title }}</h5>
                            </a>
                            <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                {{ Str::words($post->content, 20) }}
                            </div>
                            <a href="{{ $post->slug }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>

                        <a href="{{ $post->slug }}">
                            <img class="w-48 h-full rounded-r-lg object-cover"
                                src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                    </div>
                @empty
                    <div class="text-center dark:text-white">No Post Found</div>
                @endforelse
            </div>

            {{-- {{ $posts->links() }} --}}
            {{ $posts->onEachSide(1)->links() }}
        </div>
    </div>
</x-app-layout>
