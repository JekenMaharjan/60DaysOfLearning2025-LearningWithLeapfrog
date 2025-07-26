<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-10">

    <div class="max-w-xl mx-auto bg-white p-5 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Task List</h1>

        <form method="POST" action="{{ route('tasks.store') }}" class="flex gap-2 mb-4">
            @csrf
            <input name="title" type="text" placeholder="Enter a task" class="border p-2 flex-1">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add</button>
        </form>

        <ul>
            @foreach ($tasks as $task)
                <li class="flex justify-between items-center mb-2 p-2 bg-gray-200 rounded">
                    {{ $task->title }}
                    <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

</body>
</html>
