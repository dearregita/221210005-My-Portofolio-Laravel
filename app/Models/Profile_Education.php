<?php

namespace App\Models;

use App\Http\Controllers\AdminProfileEducationController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

class Profile_Education extends Model
{
    use HasFactory;
    protected $table = 'profile_education';
    protected $fillable = [
        'start_date',
        'end_date',
        'major',
        'school_name',
        'description',
    ];

    public function getById($id){
        return Profile_Education::find($id);
    }

    public function getWithPagination(){
        return Profile_Education::paginate(10);
    }

    public function saveData($data){

        // dd($data['role']);
        $profile = new Profile_Education();
        $profile->start_date = $data['start_date'];
        $profile->end_date = $data['end_date'];
        $profile->major = $data['major'];
        $profile->school_name = $data['school_name'];
        $profile->description = $data['description'];

        $profile->save();
    }

    public function updateData($id, $data){

        $detail = $this->getById($id);
 
            
        $detail->update($data);
    }

}
