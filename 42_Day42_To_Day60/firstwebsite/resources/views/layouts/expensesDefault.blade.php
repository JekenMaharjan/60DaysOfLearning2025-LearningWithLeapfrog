<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Expense Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .logout-btn {padding: 8px 16px;background-color: #f83e3eff; /* Green */color: white;border: none;border-radius: 4px;text-decoration: none;}
    </style>
</head>
<body>
    <div class="flex flex-col gap-5 p-5 bg-gray-900 h-screen w-screen">
        <div class="flex text-white max-w-4xl mx-auto mt-10 p-6 rounded shadow">
            @auth
                <div class="bg-gray-500 p-10 w-screen flex justify-between items-center mb-4 rounded-xl">
                    <h1 class="text-3xl font-semibold">Welcome, {{ Auth::user()->name }}</h1>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="logout-btn">Logout</button>
                    </form>
                </div>
            @endauth
        </div>
        <div class="bg-gray-400 p-6 mx-auto rounded-xl" style="width: 800px; height: 600px;">
            @yield('content')
        </div>
    </div>
</body>
</html>
