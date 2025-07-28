
@extends('layouts.contacts')


@section('header')
    Contact Book - Phone Directory
@endsection


@section('mainContent')
    <div class='bg-gray-600 flex flex-col gap-5 p-5 justify-center items-center rounded-xl'>
        <h1 class='p-5 text-2xl font-semibold text-white'>Edit Contact</h1>
        <form class="flex flex-col justify-center items-center text-black" method="POST" action="{{ route('contacts.update', $contact->id) }}">
            @csrf
            @method('PUT')
            <input class="p-2 rounded-xl w-96" type="text" name="name" placeholder="Name" value="{{ $contact->name }}"><br>
            <input class="p-2 rounded-xl w-96" type="email" name="email" placeholder="E-mail" value="{{ $contact->email }}"><br>
            <input class="p-2 rounded-xl w-96" type="text" name="phone" placeholder="Phone" value="{{ $contact->phone }}"><br>
            <button class="edit-btn" type="submit">Update</button>
        </form>
    </div>
@endsection


@section('footer')
    © 2025 | Built & designed by Jeken Maharjan. All rights reserved. 
@endsection