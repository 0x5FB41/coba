<!-- resources/views/artikel.blade.php -->
<x-layout>
    <x-slot:title>{{ $article->title }}</x-slot:title>

    <article class="article-container">
        <h1>{{ $article->title }}</h1>
        <div class="article">
            <p><small>{{ $article->author->name }} | {{ $article->date }}</small></p>
            <p>{{ $article->content }}</p>
            @if ($article->link)
            <p>Baca lebih lanjut: <a href="{{ $article->link }}" target="_blank">Link</a></p>
            @endif
        </div>
        <div class="back-to-blog">
            <a href="/blog">← Kembali ke Blog</a>
        </div>
    </article>
</x-layout>
