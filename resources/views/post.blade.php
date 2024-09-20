<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:px-6">
        <div class="mx-auto max-w-screen-md sm:text-center">
            <form>
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                    <div class="relative w-full">
                        <label for="search" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input
                            class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-sky-400 focus:border-sky-400 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-400 dark:focus:border-sky-400"
                            placeholder="Search for post" type="search" id="search" name='search' autocomplete="off">
                    </div>
                    <div>
                        <button type="submit"
                            class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-sky-400 border-sky-400 sm:rounded-none sm:rounded-r-lg hover:bg-sky-500 hover:border-sky-500 focus:ring-4 focus:ring-primary-300">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-0">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($post as $row)
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <a href="{{ url('post?category=' . $row->category->slug) }}">
                            <span
                                class="bg-{{ $row->category->color }}-100 text-{{ $row->category->color }}-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                {{ $row->category->name }}
                            </span>
                        </a>
                        <span class="text-sm">{{ $row->created_at->diffForHumans() }}</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="{{ url('post/' . $row->slug) }}"
                            class="hover:underline">{{ $row->title }}</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400 text-justify">
                        {{ Str::limit($row->body, 200, '...') }}
                    </p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-2">
                            <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{ $row->author->name }}" />
                            <a href="{{ url('post?author=' . $row->author->username) }}" class="hover:underline">
                                <span class="font-medium text-xs dark:text-white">
                                    {{ $row->author->name }}
                                </span>
                            </a>
                        </div>
                        <a href="{{ url('post/' . $row->slug) }}" class="inline-flex items-center text-xs font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @empty
                <div>
                    <p class="text-xl font-semibold my-4">Post not found!</p>
                    <a href="{{ url('post') }}" class="block text-blue-500 text-sm hover:underline">&laquo; Back to post </a>
                </div>
            @endforelse
        </div>
    </div>

    {{ $post->links() }}
</x-layout>
