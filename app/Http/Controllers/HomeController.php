<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index(){
        $item=array(
            'item'=>['Pack Luggage','Go to Airport','Arrive in San Juan']
        );
//        dd($item);
        \Log::debug($item);
        return view('home');
    }
}
