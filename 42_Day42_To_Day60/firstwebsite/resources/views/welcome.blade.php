<!DOCTYPE html>
<html>
<head>
    <title>Welcome - Jeken</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center">
        <div class="title"><h1>👋 Hello, I'm Jeken Maharjan</h1></div>    
        <p class="text-lg mb-6">A passionate Laravel & MERN stack developer 🚀</p>
        <a href="https://github.com/jekenmaharjan" target="_blank" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            View My GitHub
        </a><br><br>
        <a href="{{ route("testpage") }}" target="_blank" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Test your page</a>
    </div>
</body>
</html>
