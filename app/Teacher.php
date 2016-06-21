<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function users (){
        return $this->belongsToMany('App\Teacher');
    }

    public function tags (){
        return $this->belongsToMany('App\Tag');
    }
    
    public function statistical(){
        return $this->hasOne('App\Statistical');
    }
}
