<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Profile;
use Illuminate\Support\Facades\Storage;


class AdminTabelProfileController extends Controller
{
    public function __construct(Profile $profiles, Request $request)
    {
        $this->tabelprofileexperience = $profiles;
        $this->request = $request;
    }

    public function index()
    {
        $profiles = $this->tabelprofileexperience->getWithPagination();

        return view('layouts.admin.tabelprofileexperience', compact('profiles'));
    }

    public function create()
    {
        $profiles = $this->tabelprofileexperience->getWithPagination();

        return view('layouts.admin.tabelprofileexperience', compact('profiles'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->tabelprofileexperience->saveData($request->all());

        return redirect()->back();
        
    }

    public function edit($id)
    {
        $profiles = $this->tabelprofileexperience->getById($id);

        // dd($profiles);
        
        return view('layouts.admin.profile.edit', compact('profiles'));
    }

    public function update(Request $request, $id)
    {
        $this->tabelprofileexperience->updateData($id, $request->all());

        $notification = array(
            'success'   => 'Berhasil Diubah',
        );

        return redirect('/admin/profile')->with($notification);

    }

    public function distroy($id)
    {
        $profile =  Profile::find($id);
            if ($profile) {
                Storage::disk('local')->delete('public/profiles/'.basename($profile->resume));
                $profile->delete();
            }

            $notification = array(
                'success'   => 'Berhasil Dihapus',
            );
    
            return redirect('/admin/profile')->with($notification);
        //redirect to index
        return redirect()->back();
    }

    
}
