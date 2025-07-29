<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-800 flex flex-col items-center h-screen text-white justify-center">
    <div class="flex flex-col items-center justify-center border-2 rounded-xl p-5">
        <h2 class="text-lg font-semibold mb-4">Login</h2>
        <form method="POST" action="{{ route('auth.login') }}" class="space-y-4 flex flex-col items-center text-black">
            @csrf
            <input name="email" type="email" placeholder="Email" class="w-96 border p-2" required>
            <input name="password" type="password" placeholder="Password" class="w-96 border p-2" required>
            <button type="submit" class="bg-green-600 text-white px-4 py-2">Login</button>
        </form>
        <p class="mt-2 text-sm">No account? <a href="{{ route('auth.register') }}" class="text-blue-500">Register</a></p>
    </div>
</body>
</html>


