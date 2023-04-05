<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    public function index(){
        $skills = Skill::all();
        return view('admin.skill.index',compact('skills'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' =>'required|string|max:100',
            'value' =>'required|string',
        ]);
        Skill::create($data);
        return redirect()->route('skill.index');
    }
    public function edit($id)
    {
        $skills = Skill::findOrFail($id);
        return view("admin.skill.edit", compact('skills'));
    }

    public function update(Request $request,$id)
    {
        $skills = Skill::findOrFail($id);
        $request->validate([
            'name' => 'required|string',
            'value' => 'required|string',

        ]);
        $skills->name=$request->name;
        $skills->value=$request->value;
        $skills->update();
        return redirect()->route('skill.index')->with('success', 'skill page updated successfully.');


    }
    public function delete($id)
    {
        $skills = Skill::findOrFail($id);
        $skills->delete();
        return redirect()->route('skill.index')->with('success', 'skill deleted successfully');
    }
}
