<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name',
        'email',
        'password',
        'role_id',
        'photo_id',
        'is_active',
        '',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

        'password',
        'remember_token',

    ];


    //setup relationship for role
    public function role(){

        return $this->belongsTo('App\Role');
    }

    //setup relationship for photo
    public function photo(){

        return $this->belongsTo('App\Photo');
    }


    public function setPasswordAttribute($password) {

        if (!empty($password)) {

            $this->attributes['password'] = bcrypt($password);

        }
                $this->attributes['password'] = $password;
    }



    //function who will check if is admin, login and call in admin-middleware
       public function isAdmin(){

           if($this->role->name == "administrator" && $this->is_active == 1){

               return true;
           }

               return false;

            }


    public function userPlaceHolder(){

        return "http://placehold.it/400x380";

    }

}


