<!-- resources/views/blog.blade.php -->
<x-layout>
    <x-slot:title>Blog Saya</x-slot:title>

    <x-header>
        Blog Saya
    </x-header>

    <div class="article-container">
        @foreach($articles as $article)
            <div class="article">
                <h2>{{ $article['title'] }}</h2>
                <p><small>{{ $article['date'] }}</small></p>
                <p>{{ $article['content'] }}</p>
                @if ($article['link'])
                <p>Baca lebih lanjut: <a href="{{ $article['link'] }}" target="_blank">Link</a></p>
                @endif
                <hr>
            </div>
        @endforeach
    </div>

</x-layout>
