<?php

namespace App\Http\Controllers;
use App\Models\Profile_Tools;

use Illuminate\Http\Request;

class AdminProfileToolsController extends Controller
{
    public function __construct(Profile_Tools $profile_tool, Request $request)
    {
        $this->tabelprofiletools = $profile_tool;
        $this->request = $request;
    }

    public function index()
    {
        $profile_tool = $this->tabelprofiletools->getWithPagination();

        return view('layouts.admin.tabelprofiletools', compact('profile_tool'));
    }

    public function create()
    {
        $profile_tool = $this->tabelprofiletools->getWithPagination();

        return view('layouts.admin.tabelprofiletools', compact('profile_tool'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->tabelprofiletools->saveData($request->all());

        return redirect()->back();
        
    }

    public function edit($id)
    {
        $profile_tool = $this->tabelprofiletools->getById($id);

        // dd($profile_tool);
        
        return view('layouts.admin.tools.edit', compact('profile_tool'));
    }

    public function update(Request $request, $id)
    {
        $this->tabelprofiletools->updateData($id, $request->all());

        $notification = array(
            'success'   => 'Berhasil Diubah',
        );

        return redirect('/admin/profile/tools')->with($notification);

    }

    public function distroy($id)
    {
        $profile =  profile_tools::find($id);
        // if ($profile) {
        //     Storage::disk('local')->delete('public/profiles/'.basename($profile->resume));
        // }
        $profile->delete();

        $notification = array(
            'success'   => 'Berhasil Dihapus',
        );

        return redirect('/admin/profile/tools')->with($notification);


        //redirect to index
        return redirect()->back();
    }

    
}
