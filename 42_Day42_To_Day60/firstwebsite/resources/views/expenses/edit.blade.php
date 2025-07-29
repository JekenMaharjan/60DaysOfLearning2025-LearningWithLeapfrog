@extends('layouts.expensesDefault')

@section('content')
<h2 class="text-lg font-semibold mb-4">Edit Expense</h2>
<form method="POST" action="{{ route('expenses.update', $expense) }}" class="space-y-4">
    @csrf
    @method('PUT')
    <input name="amount" type="number" step="0.01" value="{{ $expense->amount }}" class="w-full border p-2" required>
    <input name="category" type="text" value="{{ $expense->category }}" class="w-full border p-2" required>
    <input name="note" type="text" value="{{ $expense->note }}" class="w-full border p-2">
    <input name="date" type="date" value="{{ $expense->date }}" class="w-full border p-2" required>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2">Update Expense</button>
</form>
<a href="{{ route('expenses.index') }}" class="bg-gray-800 p-3 rounded-xl text-blue-500 mt-4 inline-block">← Back to Dashboard</a>
@endsection
