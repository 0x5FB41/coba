<!-- resources/views/blog.blade.php -->
<x-layout>
    <x-slot:title>Blog Saya</x-slot:title>

    <x-header>Blog Saya</x-header>

    <div class="article-container">
        @foreach($articles as $article)
            <div class="article">
                <h2>{{ $article->title }}</h2>
                <p><small>{{ $article->author->name }} | {{ $article->date }}</small></p>
                <p>{{ Str::limit($article->content, 100) }}</p>
                <p>Baca lebih lanjut: <a href="/blog/{{ $article->id }}" class="font-medium text-blue-500 hover:underline">Read More</a></p>
                <hr>
            </div>
        @endforeach
    </div>
</x-layout>
