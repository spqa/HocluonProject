<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ListsController extends Controller
{
    public function index(){
        return("This is Index");
    }

    public function create(){
        return("this is create");
    }
}
