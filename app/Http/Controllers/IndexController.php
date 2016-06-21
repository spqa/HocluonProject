<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    //

    public function index()
    {
        //$user = User::with('profile','userimg',"usercount")->paginate(6);
        $teacher=Teacher::with(['statistical','tags'])->paginate(6);
        
        //dd($teacher);
        //$data = array();

//        foreach ($listUser as $user){

        //$data['name'] = $user->name;
//        $data['description'] = $user->profile->description;
//        $data['like'] = 1000;
//        $data['dislike'] = 12;
//        $data['img'] = $user->userimg->link;
//        }
        //$data->paginate(9);

        return view('index')->with('teacher', $teacher);
    }
}
