<?php

namespace App\Models;

use App\Http\Controllers\AdminTabelProfileController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
        'role',
        'office_name',
        'description',
        'resume',
    ];

    public function getById($id){
        return Profile::find($id);
    }

    public function getWithPagination(){
        return Profile::paginate(10);
    }

    public function saveData($data){

        // dd($data['role']);
        $profile = new Profile();
        $profile->start_date = $data['start_date'];
        $profile->end_date = $data['end_date'];
        $profile->role = $data['role'];
        $profile->office_name = $data['office_name'];
        $profile->description = $data['description'];

        $resume = $data['resume'];
        $resume->storeAs('public/profiles', $resume->hashName()); 
        $profile->resume = $resume->hashName();

        $profile->save();
    }

    public function updateData($id, $data){

        $detail = $this->getById($id);
        // $resume = $data->input('resume');
        // dd($data['resume']);
        $resume = $data['resume'] ?? null;
            if ($resume) {
                Storage::disk('local')->delete('public/profiles/'.basename($detail->resume));
                $resume->storeAs('public/profiles', $resume->hashName());
                $data['resume'] = $resume->hashName();
            }
            
            $detail->update($data);
    }


    protected function resume(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? url('/storage/profiles/' . $value) : null,
        );
    }

}
