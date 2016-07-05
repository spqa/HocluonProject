<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Teacher;
use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends Controller
{
    //
    public function search(Requests\SearchRequest $request){
         $query=$request->get('query');
         $findTag=Tag::where('tag_content','like','%'.$query.'%')->first()->teachers()->paginate(6);

        
        //dd($findTeacherByTag);
        return view('index')->with('teacher',$findTag);
    }
}
