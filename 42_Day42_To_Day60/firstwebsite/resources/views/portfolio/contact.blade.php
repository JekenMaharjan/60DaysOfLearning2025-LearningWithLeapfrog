@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto">
    <h2 class="text-4xl font-bold text-cyan-400 mb-6">Contact Me</h2>
    <form action="#" method="POST" class="space-y-4">
        @csrf
        <input type="text" name="name" placeholder="Your Name" class="w-full px-4 py-2 bg-gray-800 text-white rounded border border-gray-700 focus:outline-none">
        <input type="email" name="email" placeholder="Your Email" class="w-full px-4 py-2 bg-gray-800 text-white rounded border border-gray-700 focus:outline-none">
        <textarea name="message" rows="4" placeholder="Your Message" class="w-full px-4 py-2 bg-gray-800 text-white rounded border border-gray-700 focus:outline-none"></textarea>
        <button type="submit" class="bg-cyan-500 px-6 py-2 text-white rounded hover:bg-cyan-600 transition">Send</button>
    </form>
</div>
@endsection
