<?php

namespace App\Http\Controllers;

use App\Lecture;
use Illuminate\Http\Request;

class indexController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index(){

        $content = Lecture::all();
        return view('index',['content'=>$content]);

    }
    public function page($id){

        $content = Lecture::all();
        $single= Lecture::find($id);
        return view('page',['content'=>$content,'single'=>$single,'sameVideoId'=>$id]);

        

    }
}
