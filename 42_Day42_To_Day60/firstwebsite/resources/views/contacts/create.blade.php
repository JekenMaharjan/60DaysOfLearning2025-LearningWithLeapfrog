@extends('layout')

@section('content')
<h2 class="text-lg font-semibold mb-4">Add Expense</h2>
<form method="POST" action="{{ route('expenses.store') }}" class="space-y-4">
    @csrf
    <input name="amount" type="number" step="0.01" placeholder="Amount" class="w-full border p-2" required>
    <input name="category" type="text" placeholder="Category" class="w-full border p-2" required>
    <input name="note" type="text" placeholder="Note (optional)" class="w-full border p-2">
    <input name="date" type="date" class="w-full border p-2" required>
    <button type="submit" class="bg-green-600 text-white px-4 py-2">Save Expense</button>
</form>
<a href="{{ route('expenses.index') }}" class="text-blue-500 mt-4 inline-block">← Back to Dashboard</a>
@endsection
