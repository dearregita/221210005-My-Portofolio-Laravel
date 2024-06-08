<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;
use App\Models\Profile_Education;
use App\Models\Profile_Skill;
use App\Models\Profile_Tools;
use App\Models\ContactUs;


use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
        public function index()
        {
                $user = User::all()->count();
                $contactus = ContactUs::all()->count();
                $profile_experience = Profile::all()->count();
                $profile_education = Profile_Education::all()->count();
                $profile_skill = Profile_Skill::all()->count();
                $profile_tools = Profile_Tools::all()->count();

                $result = $profile_experience + $profile_education + $profile_skill + $profile_tools;


                return view('layouts.admin.dashboard', compact('user', 'contactus' ,'result'));
        }
}
