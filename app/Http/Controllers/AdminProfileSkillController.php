<?php

namespace App\Http\Controllers;
use App\Models\Profile_Skill;

use Illuminate\Http\Request;

class AdminProfileSkillController extends Controller
{
    public function __construct(Profile_Skill $profile_skill, Request $request)
    {
        $this->tabelprofileskill = $profile_skill;
        $this->request = $request;
    }

    public function index()
    {
        $profile_skill = $this->tabelprofileskill->getWithPagination();

        return view('layouts.admin.tabelprofileskill', compact('profile_skill'));
    }

    public function create()
    {
        $profile_skill = $this->tabelprofileskill->getWithPagination();

        return view('layouts.admin.tabelprofileskill', compact('profile_skill'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->tabelprofileskill->saveData($request->all());

        return redirect()->back();
        
    }

    public function edit($id)
    {
        $profile_skill = $this->tabelprofileskill->getById($id);

        // dd($profile_skill);
        
        return view('layouts.admin.skill.edit', compact('profile_skill'));
    }

    public function update(Request $request, $id)
    {
        $this->tabelprofileskill->updateData($id, $request->all());

        $notification = array(
            'success'   => 'Berhasil Diubah',
        );

        return redirect('/admin/profile/skill')->with($notification);

    }

    public function distroy($id)
    {
        $profile =  profile_skill::find($id);
        // if ($profile) {
        //     Storage::disk('local')->delete('public/profiles/'.basename($profile->resume));
        // }
        $profile->delete();

        $notification = array(
            'success'   => 'Berhasil Dihapus',
        );

        return redirect('/admin/profile/skill')->with($notification);


        //redirect to index
        return redirect()->back();
    }

    
}