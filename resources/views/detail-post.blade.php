<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-6 max-w-screen-md">
        <h2 class="mb-1 text-3xl text-gray-800 font-bold tracking-tight">Judul Artikel 1</h2>
        <div class="text-base text-gray-700">
            <a href="">Author | <span class="text-gray-500">1 Maret 2024</span></a>
        </div>
        <div class="my-4">
            <p class="font-light text-gray-600 text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, sapiente quas repellat asperiores iste magnam nostrum
                quisquam neque delectus accusamus alias velit assumenda quos eligendi optio expedita nihil fugiat iusto? Dolore doloremque ea molestiae ducimus libero, delectus
                ipsam voluptate voluptatem incidunt tempora, temporibus iste? Nisi debitis corporis quibusdam incidunt nostrum et, tempora ad odit, recusandae, harum eveniet natus
                ea dolor voluptate mollitia placeat! Pariatur, similique sint odio minima ullam fugiat, corrupti, sit placeat fugit officia magni id explicabo accusamus optio
                facilis autem odit assumenda tenetur! Non, odio veritatis delectus, error quos ad sequi omnis officia explicabo consequuntur incidunt obcaecati neque.
            </p>
        </div>
        <div>
            <a href="{{ url('post') }}" class="text-blue-500 hover:underline">&laquo; Kembali ke blog </a>
        </div>
    </article>


</x-layout>
