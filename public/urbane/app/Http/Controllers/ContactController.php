<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{
    // Save contacts
    public function saveContact(Request $req)
    {
        // return $req;
        Contact::create([
            'name' => $req->input('name'),
            'company' => $req->input('company_name'),
            'message' => $req->input('msg'),
            'phone' => $req->input('phone'),
            'designation' => $req->input('designation'),
            'website' => $req->input('website'),
            'country' => $req->input('country'),
            'email' => $req->input('email'),
        ]);
        return ['success' => true];
    }

    // Get recent contacts
    public function getRecentContacts(){
        return Contact::orderBy('created_at', 'desc')->take(10)->get();
    }

    // Read Contacts and Messages 
    public function getContacts()
    {

    }

    // Get Particular Contact
    public function getContact($id)
    {

    }

    // Get Contact Count 
    public function getContactCount()
    {
        return Contact::count();
    }

}
