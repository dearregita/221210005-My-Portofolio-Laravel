<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdminTabelHomeController extends Controller
{
    public function __construct(Home $home, Request $request)
    {
        $this->tabelhome = $home;
        $this->request = $request;
    }

    public function index()
    {
        $home = $this->tabelhome->getWithPagination();
        // dd($home);

        return view('layouts.admin.tabelhome', compact('home'));
    }

    public function create()
    {
        $home = $this->tabelhome->getWithPagination();

        return view('layouts.admin.tabelhome', compact('home'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->tabelhome->saveData($request->all());

        return redirect()->back();
        
    }

    public function edit($id)
    {
        $home = $this->tabelhome->getById($id);

        // dd($home);
        
        return view('layouts.admin.home.edit', compact('home'));
    }

    public function update(Request $request, $id)
    {
        $this->tabelhome->updateData($id, $request->all());

        $notification = array(
            'success'   => 'Berhasil Diubah',
        );

        return redirect('/admin/home')->with($notification);

    }

    public function distroy($id)
    {
        $profile =  Home::find($id);
            if ($profile) {
                Storage::disk('local')->delete('public/home/'.basename($home->photo));
                $profile->delete();
            }

            $notification = array(
                'success'   => 'Berhasil Dihapus',
            );
    
            return redirect('/admin/home')->with($notification);
        //redirect to index
        return redirect()->back();
    }

    
}