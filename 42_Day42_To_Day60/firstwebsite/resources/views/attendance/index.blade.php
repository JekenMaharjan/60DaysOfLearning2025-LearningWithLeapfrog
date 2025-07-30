<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
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
    
        @if(session('success')) 
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error')) 
            <div class="bg-red-100 border border-red-400 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif
    
        <h2 class="font-semibold text-3xl">Employee Attendance</h2>

        @if($employees->count())
            <table class="min-w-full bg-white border border-gray-200 rounded-xl shadow">
                <thead class="bg-gray-100 text-left text-gray-700">
                    <tr>
                        <th class="px-4 py-3 border-b">#</th>
                        <th class="px-4 py-3 border-b">Name</th>
                        <th class="px-4 py-3 border-b">Check In</th>
                        <th class="px-4 py-3 border-b">Check Out</th>
                        <th class="px-4 py-3 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $index => $employee)
                    <tr class="hover:bg-gray-50 border-b">
                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                        <td class="px-4 py-2">{{ $employee->Name }}</td>

                        @php
                            $attendance = $attendances[$employee->id] ?? null;
                        @endphp

                        <td class="px-4 py-2">
                            {{ $attendance && $attendance->check_in ? \Carbon\Carbon::parse($attendance->check_in)->format('H:i:s') : '-' }}
                        </td>
                        <td class="px-4 py-2">
                            {{ $attendance && $attendance->check_out ? \Carbon\Carbon::parse($attendance->check_out)->format('H:i:s') : '-' }}
                        </td>
                        <td class="px-4 py-2">
                            <div class="flex gap-3">
                                <form action="{{ route('checkin', $employee->id) }}" method="POST">
                                    @csrf
                                    <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-xl">
                                        Check In
                                    </button>
                                </form>
                                <form action="{{ route('checkout', $employee->id) }}" method="POST">
                                    @csrf
                                    <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-xl">
                                        Check Out
                                    </button>
                                </form>
                            </div>
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