<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\Profile_Tools;
use App\Models\Profile_Skill;
use App\Models\Profile_Education;
use App\Models\Footer;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // return view('layouts.public.profile');
        $profile = Profile::all();        
        $resume = Profile::find(5);

        $tools = Profile_Tools::all();
        $skill = Profile_Skill::all();
        $education = Profile_Education::all();
        $footer = Footer::all();        


        return view('layouts.public.profile', compact('resume','profile','tools','skill','education','footer'));
    }
}
