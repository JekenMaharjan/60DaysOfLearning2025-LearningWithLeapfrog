<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .btn {padding: 8px 16px;background-color: #4CAF50; /* Green */color: white;border: none;border-radius: 4px;text-decoration: none;}
        .ebtn {padding: 8px 16px;background-color: #3877ebff; /* Green */color: white;border: none;border-radius: 4px;text-decoration: none;}
        .dbtn {padding: 8px 16px;background-color: #fc2727ff; /* Green */color: white;border: none;border-radius: 4px;text-decoration: none;}
    </style>
</head>
<body class="text-white bg-gray-800 p-5">
    <h1 class="text-center font-bold text-3xl">ALL POST CONTENTS</h1>
    <br><br>
    <a href="{{ route('posts.create') }}" class="btn">Create New Post</a>
    <br><br>
    <div class="flex flex-col gap-5 border-white border-2 rounded-xl p-5">
        @foreach($posts as $post)
        <h2 class="font-bold text-xl">{{ $post->title }}</h2>
        <p class="italic">{{ $post->message }}</p>
        <div class="flex gap-5">
            <a class="ebtn" href="{{ route('posts.edit', $post->id) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post->id)}}" method="POST" class="inline-block">
                @csrf
                @method('DELETE') <!-- Spoofs a DELETE request because HTML forms only support GET and POST. 
                Laravel interprets this hidden input and routes the form to the corresponding DELETE method 
                in the controller (like destroy()). -->
                <button class="dbtn" type="submit" onclick="return confirm('Are your sure you want to delete this post?')">Delete</button>
            </form>
        </div>
        <hr class="border-t border-gray-300 my-4">
        @endforeach
    </div>
</body>
</html>