@extends('layouts.expensesDefault')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h2 class="text-xl font-bold">My Expenses</h2>
    <a href="{{ route('expenses.create') }}" class="bg-blue-500 text-white px-3 py-1 rounded">+ Add Expense</a>
</div>

<table class="w-full border rounded-xl">
    <thead class="rounded-xl">
        <tr class="bg-gray-200 rounded-xl">
            <th class="border px-2 py-1">Date</th>
            <th class="border px-2 py-1">Category</th>
            <th class="border px-2 py-1">Amount</th>
            <th class="border px-2 py-1">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($expenses as $expense)
        <tr>
            <td class="border px-2 py-1">{{ $expense->date }}</td>
            <td class="border px-2 py-1">{{ $expense->category }}</td>
            <td class="border px-2 py-1">Rs. {{ $expense->amount }}</td>
            <td class="border px-2 py-1 flex justify-center">
                <a href="{{ route('expenses.edit', $expense) }}" class="bg-blue-500 p-2 px-4 rounded-xl text-white mr-2">Edit</a>
                <form action="{{ route('expenses.destroy', $expense) }}" method="POST" class="inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Are you sure?')" class="bg-red-500 p-2 px-4 rounded-xl text-white">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<p class="mt-4 font-semibold">Total This Month: Rs. {{ $monthlyTotal }}</p>
@endsection
