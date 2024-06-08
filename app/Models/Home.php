<?php

namespace App\Models;

use App\Http\Controllers\AdminTabelHomeController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

class Home extends Model
{
    use HasFactory;
    protected $table = 'home';

    protected $fillable = [
        'name',
        'work',
        'description',
        'social_media',
        'photo',
    ];

    public function getById($id){
        return Home::find($id);
    }

    public function getWithPagination(){
        return Home::paginate(10);
    }

    public function saveData($data){

        // dd($data['role']);
        $profile = new Home();
        $profile->name = $data['name'];
        $profile->work = $data['work'];
        $profile->description = $data['description'];
        $profile->social_media = $data['social_media'];

        $photo = $data['photo'];
        $photo->storeAs('public/home', $photo->hashName()); 
        $profile->photo = $photo->hashName();

        $profile->save();
    }

    public function updateData($id, $data){

        $detail = $this->getById($id);
        // $photo = $data->input('photo');
        // dd($data['photo']);
        $photo = $data['photo'] ?? null;
            if ($photo) {
                Storage::disk('local')->delete('public/home/'.basename($detail->photo));
                $photo->storeAs('public/home', $photo->hashName());
                $data['photo'] = $photo->hashName();
            }
            
            $detail->update($data);
    }


    protected function photo(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? url('/storage/home/' . $value) : null,
        );
    }

}