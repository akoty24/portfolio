<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Experience;
use App\Models\Home;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class websiteController extends Controller
{
    public function home(){
        $homes=  Home::all();
        $abouts=  About::all();
        $skills= Skill::all();
        $experiences= Experience::all();
        $projects= Project::all();
        $contacts= Contact::all();

        return view('website',compact('homes','abouts','skills','experiences','projects','contacts'));
    }
}
