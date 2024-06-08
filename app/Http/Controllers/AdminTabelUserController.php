<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AdminTabelUserController extends Controller
{
    public function __construct(User $users, Request $request)
    {
        $this->tabeluser = $users;
        $this->request = $request;
    }

    public function index()
    {
        $users = $this->tabeluser->getWithPagination();

        return view('layouts.admin.tabeluser', compact('users'));
    }

    public function create()
    {
        $users = $this->tabeluser->getWithPagination();

        return view('layouts.admin.tabeluser', compact('users'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->tabeluser->saveData($request->all());

        return redirect()->back();
        
    }

    public function edit($id)
    {
        $users = $this->tabeluser->getById($id);

        // dd($users);
        
        return view('layouts.admin.user.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $this->tabeluser->updateData($id, $request->all());

        $notification = array(
            'success'   => 'Berhasil Diubah',
        );

        return redirect('/admin/user')->with($notification);

    }

    public function distroy($id)
    {
        $profile =  User::find($id);
        // if ($profile) {
        //     Storage::disk('local')->delete('public/profiles/'.basename($profile->resume));
        // }
        $profile->delete();

        $notification = array(
            'success'   => 'Berhasil Dihapus',
        );

        return redirect('/admin/user')->with($notification);


        //redirect to index
        return redirect()->back();
    }

    
}
