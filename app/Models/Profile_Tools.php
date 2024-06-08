<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\AdminProfileToolsController;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Profile_Tools extends Model
{
    use HasFactory;
    protected $table = 'profile_tool';
    protected $fillable = [
        'tools_name',
    ];

    public function getById($id){
        return Profile_Tools::find($id);
    }

    public function getWithPagination(){
        return Profile_Tools::paginate(10);
    }

    public function saveData($data){

        // dd($data['role']);
        $profile = new Profile_Tools();
        $profile->tools_name = $data['tools_name'];

        $profile->save();
    }

    public function updateData($id, $data){

        $detail = $this->getById($id);
 
            
        $detail->update($data);
    }

}

