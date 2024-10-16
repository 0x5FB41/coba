<!-- resources/views/profil.blade.php -->
<x-layout>
    <x-slot:title>Profil Saya</x-slot:title>

    <x-header>
        Profil Saya
    </x-header>

    <div class="article-container">
        <img src="{{ asset('images/profil.jpg') }}" alt="Foto Profil" width="400" height="400">
        <p>Halo, nama saya Afif. Saya adalah seorang mahasiswa Teknologi Rekayasa Internet semester 7. Saya memiliki ketertarikan di bidang keamanan siber dan kecerdasan buatan. Salam kenal!</p>
        <p>Anda dapat mengunjungi profil GitHub saya di sini: <a href="https://github.com/izzuddinafif" target="_blank">GitHub</a></p>
    </div>
</x-layout>
