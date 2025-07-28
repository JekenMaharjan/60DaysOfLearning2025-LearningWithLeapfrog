
@extends('layouts.contacts')


@section('header')
    Contact Book - Phone Directory
@endsection


@section('mainContent')
    <div class='bg-gray-600 flex flex-col gap-5 p-5 justify-center items-center rounded-xl'>
        <h1 class='p-5 text-3xl font-semibold'>Contact List</h1>
        <a class="add-btn" href="{{ route('contacts.create') }}">Add New</a>
        
        <div class="grid grid-cols-6 gap-2">
            @foreach($contacts as $contact)
                <div class="bg-gray-800 flex flex-col gap-2 justify-center p-5 rounded-xl">
                    <p>Name: {{ $contact->name }}</p>
                    <p>Email: {{ $contact->email }}</p>
                    <p>Phone: {{ $contact->phone }}</p>
                    <div class="flex justify-center gap-2">
                        <a class="edit-btn inline-block" href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
                        <form method="POST" action="{{ route('contacts.destroy', $contact->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="del-btn" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


@section('footer')
    © 2025 | Built & designed by Jeken Maharjan. All rights reserved. 
@endsection


