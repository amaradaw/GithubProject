<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MainController;

class MainController extends Controller
{
    function about(){
        return view('template.about');
    }

    function index(){
        return view('index');
    }

    /*function aboutMetodo(){
        return view('index');

    }*/
}
