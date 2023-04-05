<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }
    public function update(Request $request)
    {
        $contacts = Contact::findOrFail(1);
        $request->validate([
            'description' => 'required|string',
            'phone' => 'required',
            'gmail' => 'required|email|string',
            'facebook' => 'required|string',
            'instagram' => 'required|string',
            'linkedin' => 'required|string',
            'github' => 'required|string',

        ]);


        $contacts->description=$request->description;
        $contacts->phone=$request->phone;
        $contacts->gmail=$request->gmail;
        $contacts->facebook=$request->facebook;
        $contacts->instagram=$request->instagram;
        $contacts->linkedin=$request->linkedin;
        $contacts->github=$request->github;
        $contacts->update();
        return redirect()->route('contact.index')->with('success', 'contact page updated successfully.');


    }}
