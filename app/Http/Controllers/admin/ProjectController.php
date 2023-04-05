<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('admin.project.index',compact('projects'));
    }

    public function store(Request $request)
    {

       $data=$request->validate([
            'name' =>'required|string|max:100',
            'image' => 'image|mimes:jpg,png,jpeg,gif',
            'description' =>'required|string',
            'tools' =>'required|string',
            'link' =>'required',
        ]);
        if($request->file('image')) {
            $file = $request->file('image');
            $image = date('image') . $file->getClientOriginalName();
            $file->move(public_path('admin/img/project'), $image);
            $data['image'] = $image;
        }
        Project::create($data);
        return redirect()->route('project.index');
    }
    public function edit($id)
    {
        $projects = Project::findOrFail($id);
        return view("admin.project.edit", compact('projects'));
    }

    public function update(Request $request,$id)
    {
        $projects = Project::findOrFail($id);
        $request->validate([
            'name' =>'required|string|max:100',
            'image' => 'image|mimes:jpg,png,jpeg,gif',
            'description' =>'required|string',
            'tools' =>'required|string',
            'link' =>'required',

        ]);
        if ($request->hasFile('image')) {
            $path = 'admin/img/project/' . $projects->image;
            if (file_exists($path)) {
                unlink($path);
            }
            $file = $request->file('image');
            $ext = $file->extension();
            $filename = time() . '.' . $ext;
            $file->move(public_path('admin/img/project/'), $filename);
            $projects->image = $filename;
        }
        $projects->name=$request->name;
        $projects->description=$request->description;
        $projects->tools=$request->tools;
        $projects->update();
        return redirect()->route('project.index')->with('success', 'project page updated successfully.');


    }
    public function delete($id)
    {
        $projects = Project::findOrFail($id);
        $projects->delete();
        return redirect()->route('project.index')->with('success', 'project deleted successfully');
    }
}
