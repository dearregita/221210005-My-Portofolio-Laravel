<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\Footer;

use Illuminate\Http\Request;

class PublicHomeController extends Controller
{
    public function index()
    {
        $home = Home::find(1);
        $footer = Footer::all();        

        return view('layouts.public.home', compact('home','footer'));

    }
}
