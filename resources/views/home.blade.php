<!-- resources/views/home.blade.php -->
<x-layout>
    <x-slot:title>Home Page</x-slot:title>
    <x-header>
        Selamat datang di Website Laravel saya!
    </x-header>
    <div class="other-container">
        <p>Ini adalah homepage dari web Laravel saya</p>
        <a href="{{ url('/profil') }}" class="button">Cek profil saya</a>
        <a href="{{ url('/blog') }}" class="button">Baca blog saya</a>
    </div>
</x-layout>
