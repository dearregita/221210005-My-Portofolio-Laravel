<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Http\Controllers\AdminTabelUserController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
        'email',
        'date',
        'phone',
    ];

    public function getById($id){
        return User::find($id);
    }

    public function getWithPagination(){
        return User::paginate(10);
    }

    public function saveData($data){

        // dd($data['role']);
        $profile = new User();
        $profile->username = $data['username'];
        $profile->password = $data['password'];
        $profile->email = $data['email'];
        $profile->date = $data['date'];
        $profile->phone = $data['phone'];

        $profile->save();
    }

    public function updateData($id, $data){

        $detail = $this->getById($id);
 
            
        $detail->update($data);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
