<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view ('index');
    }

    public function about(){
        return view ('pages.about');
    }

    public function products(){
        return view ('pages.products');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function testimonials(){
        return view ('pages.testimonials');
    }

    public function blog(){
        return view ('pages.blog');
    }

    public function contact(){
        return view ('pages.contact');
    }

    public function login(){
        return view ('auth.index');
    }




}
