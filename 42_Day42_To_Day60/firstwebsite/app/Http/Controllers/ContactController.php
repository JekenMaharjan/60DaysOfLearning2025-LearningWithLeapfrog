<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    public function create() {
        return view('contacts.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);
        Contact::create($request->all());
        return redirect()->route('contacts.index');
    }

    public function edit(Contact $contact) {
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);
        $contact->update($request->all());
        return redirect()->route('contacts.index');
    }

    public function destroy(Contact $contact) {
        $contact->delete();
        return redirect()->route('contacts.index');
    }
}
