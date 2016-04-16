<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    //
    public function index(){
        $userlist=User::all();
        $data=gettype($userlist)." ".get_class($userlist);
        return view('test.welcome')->with('data',$data);
    }
}
