<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HangoutsController extends Controller
{
    //
    public function index(){
        return view('test.hangouts');
    }
}
