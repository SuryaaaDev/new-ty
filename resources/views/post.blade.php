<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="max-w-screen-md py-8">
        <h2 class="text-3xl font-bold pb-3">{{ $post['judul'] }}</h2>
        <div class="pb-2 text-gray-600">
            By
            <a href="/penulis/{{ $post->penulis->username }}" class="hover:underline text-gray-500">{{ $post->penulis->name }}</a> 
            in 
            <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-gray-500">{{ $post->category->name }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="pb-4">{{ $post['isi'] }}</p>
        <a href="/posts" class="text-blue-500 pt-8">&laquo; Back to Blog</a>
    </article>
    
</x-layout>