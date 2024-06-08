<?php

namespace App\Http\Controllers;
use App\Models\ContactUs;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    public function __construct(ContactUs $contactus, Request $request)
    {
        $this->contactus = $contactus;
        $this->request = $request;
    }

    public function index()
    {
        return view('layouts.public.contact-us');
    }

    public function create()
    {
        $contactus = $this->contactus->getWithPagination();

        return view('layouts.public.contact-us', compact('contact-us'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->contactus->saveData($request->all());

        return redirect()->back();
        
    }
}