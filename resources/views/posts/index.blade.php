<x-app-layout>
    <div class="container py-8">



        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

            @foreach ($posts as $post)

                <article class="bg-white shadow-lg rounded overflow-hidden">
                    <img class="h-36 w-full object-cover " src="@if($post->image) {{ Storage::url($post->image->url) }} @else  {{asset('img/640x480.png')}}  @endif" alt="">
                   

                    {{-- titulo del post --}}
                    <div class=" px-6 py-4">

                        <a class=" text-base text-gray-700" href=" {{route('posts.show', $post)}}">
                            {{ Str::limit($post->name, 25) }} </a>

                    </div>

                    {{-- eitquetas --}}
                    <div class="text-center">
                        @foreach ($post->tags as $tag)
                        
                            
                                <a class=" text-xs underline rounded-md px-1" href="{{route('posts.tag', $tag)}}">{{ $tag->name }}</a>
                            
                        @endforeach
                    </div>
                </article>

            @endforeach

        </div>

        <div class=" mt-4">
            {{$posts->links()}}
        </div>

    </div>
    
</x-app-layout>
