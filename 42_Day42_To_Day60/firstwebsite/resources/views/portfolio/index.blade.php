@extends('layouts.app')

@section('content')
<div class="text-center mt-20 space-y-6">
    <h1 class="text-5xl font-extrabold text-cyan-400 animate-pulse">Hello, I'm Jeken 👋</h1>
    <p class="text-xl text-gray-300">A passionate Full Stack Web Developer from Nepal 🇳🇵</p>
    <a href="{{ route('portfolio.projects') }}" class="mt-6 inline-block bg-cyan-500 text-white px-6 py-2 rounded hover:bg-cyan-600 transition">
        View My Work
    </a>
</div>
@endsection
