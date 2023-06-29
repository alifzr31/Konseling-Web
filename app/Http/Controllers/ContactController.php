<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(5);

        return view('contact', compact('contacts'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required|email',
            'subjek' => 'required',
            'pesan' => 'required',
        ], [
            'nama.required' => 'Please fill Your Name',
            'email.required' => 'Please fill Your Email',
            'email.email' => 'Please enter the correct Email',
            'subjek.required' => 'Please fill Subject of Message',
            'pesan.required' => 'Please fill Your Message',
        ]);
        
        Contact::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan
        ]);

        return redirect()->route('contact')->with(['success' => 'Your message has been sent']);
    }

    public function tes()
    {
        $n = 5;

        if ($n == 2) {
            return response()->json(['msg' => '1']);
        } else {
            return response()->json(['msg' => '2']);
        }
    }
}