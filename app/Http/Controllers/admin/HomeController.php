<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(){
      $homes = Home::all();
      return view('admin.home.index',compact('homes'));
  }
    public function update(Request $request)
    {
        $homes = Home::findOrFail(1);
        $request->validate([
            'name' => 'required|string',
            'title' => 'required|string|max:100',
            'image' => 'image|mimes:jpg,png,jpeg,gif',
            'cv' => 'mimes:word,pdf',
        ]);

        if ($request->hasFile('image')) {
            $path = 'admin/img/home/' . $homes->image;
            if (file_exists($path)) {
                unlink($path);
            }
            $file = $request->file('image');
            $ext = $file->extension();
            $filename = time() . '.' . $ext;
            $file->move(public_path('admin/img/home/'), $filename);
            $homes->image = $filename;
        }
        if ($request->hasFile('cv')) {
            $path = 'admin/img/home/' . $homes->cv;
            if (file_exists($path)) {
                unlink($path);
            }
            $file = $request->file('cv');
            $ext = $file->extension();
            $filename = time() . '.' . $ext;
            $file->move(public_path('admin/img/home/'), $filename);
            $homes->cv = $filename;
        }
        $homes->title=$request->title;
        $homes->name=$request->name;
        $homes->update();
        return redirect()->route('home.index')->with('success', 'home page updated successfully.');
    }
    public function download_cv($cv){
        $files= public_path('admin/img/home'.'/'.$cv);
        return response()->download($files);
    }
}
