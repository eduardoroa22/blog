<x-app-layout>

    <div class="container py-8">
        <h1 class=" text-3xl font-bold text-gray-600">{{$post->name}}</h1>
        <div class=" text-gray-500 text-lg mb-2">
            {!!$post->extract!!}
        </div>


        @can('admin.home')
        <a href="{{ route('admin.posts.edit', $post) }}">
            <p>Editar post</p>
        </a>
        @endcan





        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 ">
            {{-- contenido principal --}}
            <div class=" lg: col-span-2">

                <figure>
                    @if ($post->image)
                    <img class=" w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}"
                        alt="">
                    @else
                    <img class=" w-full h-80 object-cover object-center" src="{{asset('img/640x480.png')}}" alt="">
                    @endif
                </figure>

                <div class=" text-base text-gray-600 mt-4 text-justify">
                    {!!$post->body!!}
                </div>

            </div>

            {{-- contenido relacionado --}}
            <aside>
                <h1 class=" sm:text-center lg:text-left text-2xl font-bold text-gray-600 mb-4">Mas en
                    {{$post->category->name}}</h1>

                <ul class=" grid grid-cols-2 lg:grid-cols-1">
                    @foreach ($similares as $similar)
                    <li class=" mb-4">
                        <a class=" flex" href="{{route('posts.show', $similar)}}">
                            @if ($similar->image)
                            <img class=" w-32 h-24" src="{{Storage::url($similar->image->url)}}" alt="">
                            @else
                            <img class=" w-32 h-24" src="{{asset('img/640x480.png')}}" alt="">

                            @endif

                            <span class=" ml-2 text-gray-600">{{$similar->name}}</span>
                        </a>

                    </li>
                    @endforeach
                </ul>
            </aside>

        </div>
    </div>
</x-app-layout>