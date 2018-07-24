<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','phone_number','user_location','dob','gender', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function profile()
        {
            return $this->hasOne('App\Profile', 'users_id');
        }

     public function job()
        {
            return $this->hasMany('App\Job','users_id');
        }
       public function application()
        {
            return $this->hasMany('App\Application','users_id');
        }
}
