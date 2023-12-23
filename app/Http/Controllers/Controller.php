<?php

namespace App\Http\Controllers;

use App\Models\ManagerAppModel;
use App\Models\ManagerEduction;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function home()
    {
        $posts = ManagerAppModel::all() ;

        return view('home')->with('posts', $posts );
    }


    function contact()
    {
        return view('home');
    }

}
