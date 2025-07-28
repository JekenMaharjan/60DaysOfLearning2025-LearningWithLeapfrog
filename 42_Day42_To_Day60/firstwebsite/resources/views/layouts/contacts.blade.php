<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Contact Book</title>
    <style>
        .add-btn {padding: 8px 16px;background-color: #4CAF50; /* Green */color: white;border: none;border-radius: 4px;text-decoration: none;}
        .edit-btn {padding: 8px 16px;background-color: #3541f1ff; /* Green */color: white;border: none;border-radius: 4px;text-decoration: none;}
        .del-btn {padding: 8px 16px;background-color: #f83e3eff; /* Green */color: white;border: none;border-radius: 4px;text-decoration: none;}
    </style>
</head>
<body class="bg-gray-800 flex flex-col items-center h-screen text-white justify-between">
    <header class="bg-gray-700 p-5 text-3xl font-bold flex w-screen justify-center">
        @yield('header')
    </header>

    <main class="flex justify-center">
        @yield('mainContent')
    </main>

    <footer class="bg-gray-700 p-5 flex w-screen justify-center">
        @yield('footer')
    </footer>
</body>
</html>