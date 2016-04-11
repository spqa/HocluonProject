<?php

namespace App\Http\Controllers\test;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BladeController extends Controller
{
    //
    public function index(){
        $name=null;
        $address="Hanoi";
        return view('test.bladedemo',compact('name','address'));
    }
}
