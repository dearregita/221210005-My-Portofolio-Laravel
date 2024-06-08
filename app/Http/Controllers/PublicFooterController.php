<?php

namespace App\Http\Controllers;
use App\Models\Footer;

use Illuminate\Http\Request;

class PublicFooterController extends Controller
{
    public function index()
    {
        $footer = Footer::all();        

        return view('layouts.public.app', compact('footer'));
    }
}
