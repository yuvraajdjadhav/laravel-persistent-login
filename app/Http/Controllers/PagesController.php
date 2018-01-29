<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // index function

    public function index (){
        $title ="Welcome to MYAPP";
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function about (){
        $title ="Welcome to About Us";
        return view('pages.about')->with('title',$title);
    }


    public function services (){
        $data =array(
            'title'=>'Welcome to Services',
            'services'=>['Website design','Programing','SEO']
        );
        return view('pages.services')->with($data);
    }
}
