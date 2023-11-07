<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function home()
    {
        return view('components.home');
    }
    function about()
    {
        return view('components.about');
 }
    function projects()
    {
        return view('components.projects');
    }
    function Achievements()
    {
        return view('components.Achievements');
    }
    function contact()
    {
        return view('components.contact');
    }
}
