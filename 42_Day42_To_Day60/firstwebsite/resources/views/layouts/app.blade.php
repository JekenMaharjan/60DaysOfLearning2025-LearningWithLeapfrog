<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jeken's Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans">

    <nav class="bg-gray-800 px-6 py-4 flex justify-between items-center shadow-md">
        <h1 class="text-xl font-bold text-cyan-400">Jeken.dev</h1>
        <div class="flex gap-4 text-sm font-medium">
            <a href="{{ route('portfolio.index') }}" class="hover:text-cyan-400 transition">Home</a>
            <a href="{{ route('portfolio.about') }}" class="hover:text-cyan-400 transition">About</a>
            <a href="{{ route('portfolio.projects') }}" class="hover:text-cyan-400 transition">Projects</a>
            <a href="{{ route('portfolio.contact') }}" class="hover:text-cyan-400 transition">Contact</a>
        </div>
    </nav>

    <main class="p-8 min-h-screen">
        @yield('content')
    </main>

    <footer class="text-center text-gray-500 text-sm p-4 border-t border-gray-700">
        © {{ date('Y') }} Jeken Maharjan. All rights reserved.
    </footer>

</body>
</html>
