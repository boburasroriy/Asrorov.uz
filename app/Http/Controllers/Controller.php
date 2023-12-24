<?php

namespace App\Http\Controllers;

use App\Models\ManagerAppModel;
use App\Models\ManagerEduction;
use App\Models\PostController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function home()
    {
        $posts = ManagerAppModel::all() ;
        $adminPost = PostController::all();
        return view('home')->with(['posts'=> $posts, ])->with( ['adminPost' => $adminPost]);
    }



    function contact()
    {
        return view('home');
    }

}
