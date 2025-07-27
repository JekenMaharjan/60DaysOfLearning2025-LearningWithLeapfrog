@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <h2 class="text-4xl font-bold text-cyan-400 mb-6">My Projects</h2>
    <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-gray-800 p-4 rounded-lg shadow hover:shadow-lg transition">
            <h3 class="text-xl font-bold text-white">ToDoList App</h3>
            <p class="text-gray-300 mt-2">A task manager built with Laravel and Tailwind CSS.</p>
        </div>
        <div class="bg-gray-800 p-4 rounded-lg shadow hover:shadow-lg transition">
            <h3 class="text-xl font-bold text-white">OfficeCare (E-commerce)</h3>
            <p class="text-gray-300 mt-2">Responsive store for office products using React & PHP.</p>
        </div>
        <div class="bg-gray-800 p-4 rounded-lg shadow hover:shadow-lg transition">
            <h3 class="text-xl font-bold text-white">Text Summarizer</h3>
            <p class="text-gray-300 mt-2">Python-based summarizer using NLP and Transformer models.</p>
        </div>
        <div class="bg-gray-800 p-4 rounded-lg shadow hover:shadow-lg transition">
            <h3 class="text-xl font-bold text-white">Advanced Calculator</h3>
            <p class="text-gray-300 mt-2">Built with React.js, supports multi-operations and memory.</p>
        </div>
    </div>
</div>
@endsection
