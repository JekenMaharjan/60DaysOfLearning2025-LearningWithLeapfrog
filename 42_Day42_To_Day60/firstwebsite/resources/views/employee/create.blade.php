<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex flex-col bg-gray-800 text-white items-center">
    <nav class="flex flex-col gap-5 bg-gray-900 items-center">
        <p class="text-3xl p-4 font-semibold">Attendance System</p>
        <div class="flex gap-10 bg-gray-600 w-screen p-2 justify-center">
            <a class="bg-green-500 p-3 cursor-pointer rounded-xl" href="{{ route('attendance.index') }}">Attendance</a>
            <a class="bg-green-500 p-3 cursor-pointer rounded-xl" href="{{ route('employees.index') }}">Employees</a>
        </div>
    </nav>
    <div class="flex flex-col gap-2 items-center bg-blue-300 p-9 mt-40 text-black rounded-lg w-96">
        <h2 class="font-semibold text-2xl">Add New Employee</h2>
        <br>
        <form method="POST" action="{{ route('employees.store') }}" class="flex flex-col gap-2">
            @csrf
            <input class="p-3 rounded-xl" type="text" name="name" placeholder="Employee Name" required>
            <button class="bg-blue-500 p-3 cursor-pointer rounded-xl" type="submit">Add Employee</button>
        </form>
    </div>

</body>
</html>