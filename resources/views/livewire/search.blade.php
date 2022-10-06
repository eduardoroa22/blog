<div class=" relative mt-3 flex-1" x-data>

    <form action="{{route('search')}}" autocomplete="off">
        <x-jet-input name="name" wire:model="search" type="text" class=" h-10  flex w-full " placeholder="Buscar un post" />

        <button class=" justify-center flex items-center absolute top-0 right-0 w-12 h-10 bg-gray-700 rounded-r-md">
            <x-search size="35" color="white" />
        </button>
    </form>


    <div class=" absolute w-full hidden" :class="{'hidden' : !$wire.open}" @click.away="$wire.open = false">
        <div class=" bg-white rounded-lg shadow mt-1">
            <div class=" px-4 py-3 space-y-1">
                @forelse ($posts as $post)

                    <a href="{{ route('posts.show', $post) }}" class=" flex border border-t-4">
                        <img class=" w-16 h-12 object-cover" src="{{ Storage::url($post->image->url) }}" alt="">


                        <div class=" ml-4 text-gray-700">
                            <p class=" text-sm font-semibold leading-3">{{ $post->name }}</p>
                            <p>Categoria: {{ $post->category->name }} </p>
                        </div>
                    </a>
                @empty

                    <p class=" text-lg leading-5">No existe Post con ese nombre</p>


                @endforelse
            </div>

        </div>
    </div>

</div>
