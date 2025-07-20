<!DOCTYPE html>
<html>
<head>
    <title>Welcome - Jeken</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>
<body class="bg-gray-800 flex flex-col items-center h-screen text-white justify-between">
    <header class="bg-gray-700 p-5 text-3xl font-bold flex w-screen justify-center">
        @yield('header')
    </header>

    <main class="flex w-screen">
        @yield('mainContent')
    </main>

    <footer class="bg-gray-700 p-5 flex w-screen justify-center">
        @yield('footer')
    </footer>

</body>
</html>
