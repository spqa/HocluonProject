<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    //
    public function getUsername(){
        return $this->name;
    }
}
