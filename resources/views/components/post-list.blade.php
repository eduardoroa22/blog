@props(['post'])

<li class=" bg-white rounded-lg shadow mb-4 overflow-hidden">

    <article class="flex ">

        <figure>
            <img class=" h-36 w-44 object-cover object-center " src="{{ Storage::url($post->image->url) }}" alt="">
        </figure>

        <a href="{{ route('posts.show', $post) }}">
            <div class=" flex-1 py-4 px-6 flex flex-col">
                <div class=" flex justify-between">
                    <h1 class=" text-lg font-semibold to-gray-700">{{ $post->name }}</h1>
                    
                </div>
                <p class=" py-6 text-sm font-semibold text-gray-700">Categoria: {{ $post->category->name }}</p>
            </div>
        </a>

        


    </article>

</li>
