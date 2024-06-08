<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Controllers\AdminProfileSkillController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Profile_Skill extends Model
{
    use HasFactory;
    protected $table = 'profile_skill';
    protected $fillable = [
        'skill_name',
    ];

    public function getById($id){
        return Profile_Skill::find($id);
    }

    public function getWithPagination(){
        return Profile_Skill::paginate(10);
    }

    public function saveData($data){

        // dd($data['role']);
        $profile = new Profile_Skill();
        $profile->skill_name = $data['skill_name'];

        $profile->save();
    }

    public function updateData($id, $data){

        $detail = $this->getById($id);
 
            
        $detail->update($data);
    }

}
