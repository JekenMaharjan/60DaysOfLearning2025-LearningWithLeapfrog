<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Post</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .btn {padding: 8px 16px;background-color: #4CAF50; /* Green */color: white;border: none;border-radius: 4px;text-decoration: none;}
    </style>
</head>
<body class="min-h-screen flex flex-col items-center justify-center bg-gray-800 text-white text-center">
    <div class="border-white p-5 m-5 border-2 rounded-xl">
        <h3 class="text-3xl font-bold">Create Post Form</h3>
        <br>
        <form action="{{ route('posts.store') }}" method="POST">
            <!-- CSRF token to protect against cross-site request forgery -->
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="text-black ml-8 p-1 w-96">
            <br><br>
            <label for="message">Message:</label>
            <textarea name="message" id="message" class="text-black pr-5 p-1 w-96">{{ old('message') }}</textarea>
            <br><br>
            <a href="{{ route('posts.index') }}" class="btn">Check Posts</a>
            <button type="submit" class="bg-blue-500 inline-block text-center text-white px-4 py-2 rounded hover:bg-blue-600">Save</button>
        </form>
    </div>

    @if($errors->any())
    <div class="bg-red-500 p-2 m-5 border-2 rounded-xl">
        <h3 class="text-xl font-semibold text-center text-white">⚠️Error:</h>
        @foreach($errors->all() as $error)
        {{ $error }}
        @endforeach
    </div>
    @endif
</body>
</html>