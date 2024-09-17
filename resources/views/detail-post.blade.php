<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-6 max-w-screen-md">
        <h2 class="mb-1 text-3xl text-gray-800 font-bold tracking-tight">{{ $post->title }}</h2>
        <div class="text-base text-gray-700">
            <span class="text-gray-500">By <a href="{{ url('author/' . $post->author->username) }}" class="text-black font-semibold hover:underline">{{ $post->author->name }}</a> in
                <a href="{{ url('category/' . $post->category->slug) }}" class="text-black font-semibold hover:underline">{{ $post->category->name }}</a> at
                {{ $post->created_at->diffForHumans() }}</span>
        </div>
        <div class="my-4">
            <p class="font-light text-gray-600 text-justify">
                {{ $post->body }}
            </p>
        </div>
        <div>
            <a href="{{ url('post') }}" class="text-blue-500 hover:underline">&laquo; Back to post </a>
        </div>
    </article>


</x-layout>
