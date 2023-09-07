<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function content(){
        return view('prueba');
    }
    
    public function form(){
        return view('form');
    }

    public function components(){
        return view('components');
    }

    public function cards(){
        return view('cards');
    }

    public function componentsII(){
        return view('componentsII');
    }

    
    public function utilidades(){
        return view('utilidades');
    }

}
