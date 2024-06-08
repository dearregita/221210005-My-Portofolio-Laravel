<?php

namespace App\Models;
use App\Http\Controllers\AdminContactUsController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $table = 'contactus';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];

    public function getById($id){
        return ContactUs::find($id);
    }

    public function getWithPagination(){
        return ContactUs::paginate(10);
    }

    public function saveData($data){

        // dd($data['role']);
        $profile = new ContactUs();
        $profile->name = $data['name'];
        $profile->email = $data['email'];
        $profile->phone = $data['phone'];
        $profile->message = $data['message'];

        $profile->save();
    }
}

