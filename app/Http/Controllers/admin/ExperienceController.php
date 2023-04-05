<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index(){
        $experiences = Experience::all();
        return view('admin.experience.index',compact('experiences'));
    }

    public function store(Request $request)
    {

        $data=$request->validate([
            'name' =>'required|string|max:100',
            'title' =>'required|string|max:100',
            'company' =>'required|string',
            'start' =>'required|string',
            'end' =>'required|string',
        ]);
        Experience::create($data);
        return redirect()->route('experience.index');
    }
    public function edit($id)
    {
        $experiences = Experience::findOrFail($id);
        return view("admin.experience.edit", compact('experiences'));
    }

    public function update(Request $request,$id)
    {
        $experiences = Experience::findOrFail($id);
        $request->validate([
            'name' =>'required|string|max:100',
            'title' =>'required|string|max:100',
            'company' =>'required|string',
            'start' =>'required|string',
            'end' =>'required|string',

        ]);
        $experiences->name=$request->name;
        $experiences->title=$request->title;
        $experiences->company=$request->company;
        $experiences->start=$request->start;
        $experiences->end=$request->end;
        $experiences->update();
        return redirect()->route('experience.index')->with('success', 'experience page updated successfully.');


    }
    public function delete($id)
    {
        $experiences = Experience::findOrFail($id);
        $experiences->delete();
        return redirect()->route('experience.index')->with('success', 'experience deleted successfully');
    }    
}
