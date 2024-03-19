<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Store a newly created contact in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts',
            'phone_number' => 'required',
        ]);

        // Create a new contact record in the database
        $contact = Contact::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['phone_number'],
            'note' => $request->input('note', ''), // Optional note
        ]);

        // Return a response indicating success
        return response()->json(['message' => 'Contact added successfully'], 201);
    }

    /**
     * Remove the specified contact from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the contact by its ID
        $contact = Contact::findOrFail($id);

        // Delete the contact
        $contact->delete();

        // Return a response indicating success
        return response()->json(['message' => 'Contact deleted successfully'], 200);
    }

    /**
     * Display a listing of the contacts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all contacts from the database
        $contacts = Contact::all();

        // Return the contacts as JSON response
        return response()->json($contacts, 200);
    }
}
