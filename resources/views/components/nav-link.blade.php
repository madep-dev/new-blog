@props(['active' => false])

<a {{ $attributes }}
    class="{{ $active ? 'bg-gray-50 text-gray-700' : 'text-white hover:bg-gray-50 hover:text-gray-700' }} rounded-md  px-3 py-2 text-sm font-medium transition duration-200"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
