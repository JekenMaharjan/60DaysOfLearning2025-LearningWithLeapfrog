@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto space-y-6">
    <h2 class="text-4xl font-bold text-cyan-400">About Me</h2>
    <p class="text-gray-300">
        I'm a Computer Engineering student from Nepal with a strong passion for Full Stack Web Development. I enjoy crafting sleek UIs and building real-world apps.
    </p>

    <h3 class="text-2xl font-semibold text-cyan-300 mt-6">Skills</h3>
    <ul class="grid grid-cols-2 md:grid-cols-3 gap-4 text-gray-200 mt-4">
        <li>HTML / CSS / JS</li>
        <li>React.js</li>
        <li>PHP / Laravel</li>
        <li>Node.js / Express</li>
        <li>MongoDB / MySQL</li>
        <li>Git / GitHub</li>
    </ul>
</div>
@endsection
