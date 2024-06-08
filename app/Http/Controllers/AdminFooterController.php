<?php

namespace App\Http\Controllers;
use App\Models\Footer;

use Illuminate\Http\Request;

class AdminFooterController extends Controller
{
    public function __construct(Footer $footers, Request $request)
    {
        $this->tabelinkfooter = $footers;
        $this->request = $request;
    }

    public function index()
    {
        $footers = $this->tabelinkfooter->getWithPagination();
        dd($footers);

        return view('layouts.admin.tabelinkfooter', compact('footers'));
    }

    public function create()
    {
        $footers = $this->tabelinkfooter->getWithPagination();

        return view('layouts.admin.tabelinkfooter', compact('footers'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->tabelinkfooter->saveData($request->all());

        return redirect()->back();
        
    }

    public function edit($id)
    {
        $footers = $this->tabelinkfooter->getById($id);

        // dd($footer);
        
        return view('layouts.admin.footer.edit', compact('footers'));
    }

    public function update(Request $request, $id)
    {
        $this->tabelinkfooter->updateData($id, $request->all());

        $notification = array(
            'success'   => 'Berhasil Diubah',
        );

        return redirect('/admin/footer')->with($notification);

    }

    public function distroy($id)
    {
        $profile =  footer::find($id);
        // if ($profile) {
        //     Storage::disk('local')->delete('public/profiles/'.basename($profile->resume));
        // }
        $profile->delete();

        $notification = array(
            'success'   => 'Berhasil Dihapus',
        );

        return redirect('/admin/footer')->with($notification);


        //redirect to index
        return redirect()->back();
    }

    
}
