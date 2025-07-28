
@extends('layouts.contacts')


@section('header')
    Contact Book - Phone Directory
@endsection


@section('mainContent')
    <div class='bg-gray-600 flex flex-col gap-5 p-5 justify-center items-center rounded-xl text-black'>
        <h1 class='p-5 text-2xl font-semibold text-white'>Add Contact</h1>
        <form class="flex flex-col justify-center items-center" method="POST" action="{{ route('contacts.store') }}">
            @csrf
            <input class="p-2 rounded-xl w-96" type="text" name="name" placeholder="Name"><br>
            <input class="p-2 rounded-xl w-96" type="email" name="email" placeholder="Email"><br>
            <input class="p-2 rounded-xl w-96" type="text" name="phone" placeholder="Phone"><br>
            <button class="add-btn" type="submit">Save</button>
        </form>
    </div>
@endsection


@section('footer')
    © 2025 | Built & designed by Jeken Maharjan. All rights reserved. 
@endsection