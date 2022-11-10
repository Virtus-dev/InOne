<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $contacts = Contact::all();
        return(view('contacts.index')->with('contacts', $contacts));
    }


    public function create()
    {
        //
        return(view('contacts.create'));
    }

    public function store(Request $request)
    {
        //
        $contact = new Contact();

        $contact->name = $request->get('name');
        $contact->first_last_name = $request->get('first_last_name');
        $contact->second_last_name = $request->get('second_last_name');
        $contact->phone_number = $request->get('phone_number');
        $contact->email = $request->get('email');
        $contact->gender = $request->get('gender');
        $contact->birth_date = $request->get('birth_date');

        $contact->save();
        return redirect('/contacts');

    }

    public function show(Contact $contacts)
    {
        //
    }

    public function edit($id)
    {
        //
        $contact = Contact::find($id);
        return view('contacts.edit')->with('contact',$contact);
    }

    public function update(Request $request, $id)
    {
        //
        $contact = Contact::find($id);

        $contact->name = $request->get('name');
        $contact->first_last_name = $request->get('first_last_name');
        $contact->second_last_name = $request->get('second_last_name');
        $contact->phone_number = $request->get('phone_number');
        $contact->email = $request->get('email');
        $contact->gender = $request->get('gender');
        $contact->birth_date = $request->get('birth_date');

        $contact->save();
        return redirect('/contacts');
    }


    public function destroy($id)
    {
        //
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/contacts');
    }
}
