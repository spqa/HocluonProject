<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function users (){
        return $this->belongsToMany('app\Teacher');
    }

    public function tags (){
        return $this->belongsToMany('app\Tag');
    }
}
