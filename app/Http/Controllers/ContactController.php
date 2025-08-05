<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;


class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        return redirect('/');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());
        return redirect('/');
    }

    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect('/');
    }

    public function showImportForm()
    {
        return view('contacts.import');
    }

    public function importXML(Request $request)
    {
        $request->validate([
        //  'xml_file' => 'required|file|ends_with:xml',
            'xml_file' => 'required|file',

        ]);

        $xml = simplexml_load_file($request->file('xml_file')->getRealPath());

        foreach ($xml->contact as $contactData) {
            Contact::create([
                'name' => (string)$contactData->name,
                'phone' => (string)$contactData->phone,
            ]);
        }

        return redirect('/')->with('success', 'Contacts imported successfully!');
    }

    

}
