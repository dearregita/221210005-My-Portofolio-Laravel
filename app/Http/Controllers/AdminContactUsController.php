<?php

namespace App\Http\Controllers;
use App\Models\ContactUs;

use Illuminate\Http\Request;

class AdminContactUsController extends Controller
{
    public function __construct(ContactUs $contactus, Request $request)
    {
        $this->tabelcontactus = $contactus;
        $this->request = $request;
    }

    public function index()
    {
        $contactus = $this->tabelcontactus->getWithPagination();

        return view('layouts.admin.tabelcontactus', compact('contactus'));
    }

    public function create()
    {
        $contactus = $this->tabelcontactus->getWithPagination();

        return view('layouts.admin.tabelcontactus', compact('contactus'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->tabelcontactus->saveData($request->all());

        return redirect()->back();
        
    }

    public function edit($id)
    {
        $contactus = $this->tabelcontactus->getById($id);

        // dd($contactus);
        
        return view('layouts.admin.contactus.edit', compact('contactus'));
    }

    public function update(Request $request, $id)
    {
        $this->tabelcontactus->updateData($id, $request->all());

        $notification = array(
            'success'   => 'Berhasil Diubah',
        );

        return redirect('/admin/contactus')->with($notification);

    }

    public function distroy($id)
    {
        $profile =  ContactUs::find($id);
        // if ($profile) {
        //     Storage::disk('local')->delete('public/profiles/'.basename($profile->resume));
        // }
        $profile->delete();

        $notification = array(
            'success'   => 'Berhasil Dihapus',
        );

        return redirect('/admin/contactus')->with($notification);


        //redirect to index
        return redirect()->back();
    }

    
}
