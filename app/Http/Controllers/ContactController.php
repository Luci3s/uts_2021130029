<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        // $contact = Contact::create([
        //     'full_name' => $validated['full_name'],
        //     'email' => $validated['email'],
        //     'phone_number' => $validated['phone_number'],
        // ]);

        $contact = Contact::create($validated);

        $contact = new Contact();
        $contact->full_name = $validated['full_name'];
        $contact->email = $validated['email'];
        $contact->phone_number = $validated['phone_number'];
        $contact->save();

        // dd($request);
        return redirect()->route('contact-us.index')->with('success', 'Thank you, we will contact you soon!');
    }
}
