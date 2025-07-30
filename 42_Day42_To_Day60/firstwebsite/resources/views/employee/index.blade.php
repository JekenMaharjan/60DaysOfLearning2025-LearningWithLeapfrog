<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-800 text-white">
    <nav class="flex flex-col gap-5 bg-gray-900 items-center">
        <p class="text-3xl p-4 font-semibold">Attendance System</p>
        <div class="flex gap-10 bg-gray-600 w-screen p-2 justify-center">
            <a class="bg-green-500 p-3 cursor-pointer rounded-xl" href="{{ route('attendance.index') }}">Attendance</a>
            <a class="bg-green-500 p-3 cursor-pointer rounded-xl" href="{{ route('employees.index') }}">Employees</a>
        </div>
    </nav>

    
    <div class="flex flex-col gap-5 bg-gray-400 text-black items-center p-5">
        
        <a class="bg-blue-500 p-3 rounded-xl text-white" href="{{ route('employees.create') }}">+ Add Employee</a>

       @if(session('alert'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('alert') }}
            </div>
        @endif

        <p>Total Employees: {{ $employees->count() }}</p>

        <h2 class="font-semibold text-3xl">Employee List</h2>

        @if($employees->count())
            <table class="min-w-full bg-white border border-gray-200 rounded-xl shadow">
                <thead class="bg-gray-100 text-left text-gray-700">
                    <tr>
                        <th class="px-4 py-3 border-b">#</th>
                        <th class="px-4 py-3 border-b">Name</th>
                        <th class="px-4 py-3 border-b">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $index => $employee)
                    <tr class="hover:bg-gray-50 border-b">
                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                        <td class="px-4 py-2">{{ $employee->Name }}</td>
                        <td class="px-4 py-2">
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('Delete this employee?');" class="inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-xl">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-gray-600">No employees found.</p>
        @endif

    </div>

</body>
</html>