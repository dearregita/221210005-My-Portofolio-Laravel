<?php

namespace App\Http\Controllers;
use App\Models\Profile_Education;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdminProfileEducationController extends Controller
{
    public function __construct(Profile_Education $profile_education, Request $request)
    {
        $this->tabelprofileeducation = $profile_education;
        $this->request = $request;
    }

    public function index()
    {
        $profile_education = $this->tabelprofileeducation->getWithPagination();

        return view('layouts.admin.tabelprofileeducation', compact('profile_education'));
    }

    public function create()
    {
        $profile_education = $this->tabelprofileeducation->getWithPagination();

        return view('layouts.admin.tabelprofileeducation', compact('profile_education'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->tabelprofileeducation->saveData($request->all());

        return redirect()->back();
        
    }

    public function edit($id)
    {
        $profile_education = $this->tabelprofileeducation->getById($id);

        // dd($profile_education);
        
        return view('layouts.admin.education.edit', compact('profile_education'));
    }

    public function update(Request $request, $id)
    {
        $this->tabelprofileeducation->updateData($id, $request->all());

        $notification = array(
            'success'   => 'Berhasil Diubah',
        );

        return redirect('/admin/profile/education')->with($notification);

    }

    public function distroy($id)
    {
        $profile =  profile_education::find($id);
        if ($profile) {
            Storage::disk('local')->delete('public/profiles/'.basename($profile->resume));
        }
        $profile->delete();

        $notification = array(
            'success'   => 'Berhasil Dihapus',
        );

        return redirect('/admin/profile/education')->with($notification);


        //redirect to index
        return redirect()->back();
    }

    
}
