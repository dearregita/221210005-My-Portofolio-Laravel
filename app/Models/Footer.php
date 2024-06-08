<?php

namespace App\Models;

use App\Http\Controllers\AdminFooterController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Footer extends Model
{
    use HasFactory;
    protected $table = 'footers';
    protected $fillable = [
        'footer_name',
        'link',
    ];

    public function getById($id){
        return Footer::find($id);
    }

    public function getWithPagination(){
        return Footer::paginate(10);
    }

    public function saveData($data){

        // dd($data['role']);
        $profile = new Footer();
        $profile->footer_name = $data['footer_name'];
        $profile->link = $data['link'];

        $profile->save();
    }

    public function updateData($id, $data){

        $detail = $this->getById($id);
 
            
        $detail->update($data);
    }

}
