<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .ubtn {
            padding: 8px 16px;
            background-color: #27fcbcff; /* Green */
            color: white;
            border: none;
            border-radius: 4px;
            text-decoration: none;
        }
    </style>
</head>
<body class="text-white bg-gray-800 p-5">
    <h1 class="text-center font-bold text-2xl">Edit Post</h1>

    <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Tells Laravel to treat this as a PUT request -->

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" class="text-black ml-8">
        <br><br>
        <label for="message">Message:</label>
        <textarea name="message" id="message" class="text-black pr-5">{{ old('message', $post->message) }}</textarea>
        <br><br>
        <button class="ubtn" type="submit">Update</button>
    </form>
</body>
</html>