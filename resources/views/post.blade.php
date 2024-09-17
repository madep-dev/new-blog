<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($post as $row)
        <article class="py-6 max-w-screen-md border-b border-gray-300">
            <h2 class="mb-1 text-3xl text-gray-800 font-bold tracking-tight"><a href="{{ url('post/' . $row->slug) }}" class="hover:underline">{{ $row->title }}</a></h2>
            <div class="text-base text-gray-700">
                <span class="text-gray-500">By <a href="{{ url('author/' . $row->author->username) }}" class="text-black font-semibold hover:underline">{{ $row->author->name }}</a> in
                    <a href="{{ url('category/' . $row->category->slug) }}" class="text-black font-semibold hover:underline">{{ $row->category->name }}</a> at
                    {{ $row->created_at->diffForHumans() }}</span>
            </div>
            <div class="my-4">
                <p class="font-light text-gray-600 text-justify">
                    {{ Str::limit($row->body, 220, '...') }}
                </p>
            </div>
            <div>
                <a href="{{ url('post/' . $row->slug) }}" class="text-blue-500 hover:underline">Read More &raquo;</a>
            </div>
        </article>
    @endforeach

</x-layout>
