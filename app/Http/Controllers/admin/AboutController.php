<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $abouts = About::all();
        return view('admin.about.index',compact('abouts'));
    }
    public function update(Request $request)
    {
        $abouts = About::findOrFail(1);
        $request->validate([
            'description' => 'required|string',
         
        ]);

        
        $abouts->description=$request->description;
        $abouts->update();
        return redirect()->route('about.index')->with('success', 'about page updated successfully.');


    }
}
