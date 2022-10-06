<x-app-layout>
    <div class="container py-8">

    
    <ul>
        @forelse ($posts as $post)
        <x-post-list :post="$post" />

        @empty

        <li class=" bg-white rounded-lg shadow-lg">

            <div class="p-4">
                <p class=" text-lg text-gray-700">
                    No existe ningun Post con este Nombre
                </p>
            </div>

        </li>

        @endforelse
    </ul>

    <div class=" mt-4">
        {{$posts->links()}}
    </div>
</div>



</x-app-layout>
