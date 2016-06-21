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
    public function teachers (){
        return $this->belongsToMany('app\Teacher');
    }
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
//    public function profile(){
//        return $this->hasOne('App\Profile');
//    }
//
//    public function userimg(){
//        return $this->hasOne('App\Userimg');
//    }
//
//    public function userlike(){
//        return $this->hasMany('App\Userlike');
//    }
//
//    public function userdislike(){
//        return $this->hasMany('App\Userdislike');
//    }
//    
//    public function  usercount(){
//        return $this->hasOne('App\Usercount');
//    }

}
