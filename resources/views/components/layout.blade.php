<!-- resources/views/components/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Laravel App' }}</title>
    <!-- Link to CSS and JS -->
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.5/dist/cdn.min.js" defer></script>
</head>
<body class="bg-lightskyblue">

    <!-- Include Navbar Component -->
    <x-navbar></x-navbar>

    <!-- Main content area -->
    <main class="container mx-auto my-8">
        {{ $slot }}
    </main>

    <!-- Optional JavaScript -->
    {{-- <script src="{{ asset('js/script.js') }}"></script> --}}
</body>
</html>
