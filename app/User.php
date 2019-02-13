<?php
<<<<<<< HEAD
namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
=======

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

>>>>>>> 9a3b109... installing blog and learn migration of database
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'name', 'email', 'password','email_token'
    ];
=======
        'name', 'email', 'password',
    ];

>>>>>>> 9a3b109... installing blog and learn migration of database
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
<<<<<<< HEAD
    public function AauthAcessToken(){
        return $this->hasMany('\App\OauthAccessToken');
    }
}
=======
}
>>>>>>> 9a3b109... installing blog and learn migration of database
