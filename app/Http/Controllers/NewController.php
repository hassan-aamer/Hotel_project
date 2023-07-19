<?php

namespace App\Http\Controllers;
use App\Models\contact;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function showVideo(){
        return view('video');
    }
    public function add(Request $request ){
        contact::create($request->all());
        return redirect(to:'contact');
    }
}
