<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
    
    <article class="max-w-screen-md py-6 border-b border-gray-500 mb-5">
        <h2 class="text-3xl font-bold pb-3">{{ $post['judul'] }}</h2>
        <div class="pb-2 text-gray-600">
            By
            <a href="/penulis/{{ $post->penulis->username }}" class="hover:underline text-gray-500">{{ $post->penulis->name }}</a> 
            in 
            <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-gray-500">{{ $post->category->name }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="pb-4">{{ Str::limit ($post['isi'], 150) }}</p>
        <a href="/posts/{{ $post['slug'] }}" class="text-blue-500">Read More &raquo;</a>
    </article>
    
    @endforeach

    {{ $posts->links() }}
</x-layout>
