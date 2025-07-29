<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-800 flex flex-col items-center h-screen text-white justify-center">
    <div class="flex flex-col items-center justify-center border-2 rounded-xl p-5">
        <h2 class="text-2xl font-semibold mb-4">Register</h2>
        <form method="POST" action="{{ route('auth.register') }}" class="space-y-4 flex flex-col items-center text-black">
            @csrf
            <input name="name" type="text" placeholder="Name" class="w-96 border p-2" required>
            <input name="email" type="email" placeholder="Email" class="w-96 border p-2" required>
            <input name="password" type="password" placeholder="Password" class="w-96 border p-2" required>
            <input name="password_confirmation" type="password" placeholder="Confirm Password" class="w-96 border p-2" required>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2">Register</button>
        </form>
        <p class="mt-2 text-sm">Already have an account? <a href="{{ route('auth.login') }}" class="text-blue-500">Login</a></p>
    </div>
</body>
</html>
