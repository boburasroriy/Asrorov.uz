<?php

namespace App\Http\Controllers;

use App\Http\Requests\storerequest;
use App\Models\ManagerAppModel;
use Illuminate\Http\Request;


class ManagerApplication extends Controller
{

public function store(storerequest $request)
{
   $adminApp = ManagerAppModel::create([
        'id'=>$request->id,
        'first_title'=>$request->first_title,
        'second_title'=>$request->second_title,
        'slot'=>$request->slot,
       'first_title_education'=>$request->first_title_education,
       'first_text_education'=>$request->first_text_education,
       'technologies_1'=>$request->technologies_1,
       'technologies_2'=>$request->technologies_2,
       'technologies_3'=>$request->technologies_3,
       'technologies_4'=>$request->technologies_4,
       'technologies_5'=>$request->technologies_5,
       'technologies_6'=>$request->technologies_6,
       'technologies_7'=>$request->technologies_7,
       'technologies_8'=>$request->technologies_8,
       'technologies_9'=>$request->technologies_9,
       'technologies_10'=>$request->technologies_10,

       'title_skills_1'=> $request->title_skills_1,
       'title_skills_2'=> $request->title_skills_2,
       'title_skills_3'=> $request->title_skills_3,
       'title_skills_4'=> $request->title_skills_4,
       'title_skills_5'=> $request->title_skills_5,
       'title_skills_6'=> $request->title_skills_6,
       'title_skills_7'=> $request->title_skills_7,
       'title_skills_8'=> $request->title_skills_8,
       'title_skills_9'=> $request->title_skills_9,
       'title_skills_10'=> $request->title_skills_10,
       'title_skills_11'=> $request->title_skills_11,
       'title_skills_12'=> $request->title_skills_12,
       'title_skills_13'=> $request->title_skills_13,
       'title_skills_14'=> $request->title_skills_14,
       'title_skills_15'=> $request->title_skills_15,
       'title_skills_16'=> $request->title_skills_16,
       'title_skills_17'=> $request->title_skills_17,
       'title_skills_18'=> $request->title_skills_18,


   ]);;
   return redirect()->back();
}
    function edit(ManagerAppModel $posts)
    {
        $posts = ManagerAppModel::all();
        return view('posts.edit')->with(['posts' => $posts]);
    }

    public function update(storerequest $request, ManagerAppModel $post, $id)
    {
        ManagerAppModel::find($id)->update([
            'first_title' => request('first_title'),
            'second_title' => request('second_title'),
            'slot' => request('slot'),
            'first_title_education'=> request('first_title_education'),
            'first_text_education'=> request('first_text_education'),
            'technologies_1'=> request('technologies_1'),
            'technologies_2'=> request('technologies_2'),
            'technologies_3'=> request('technologies_3'),
            'technologies_4'=> request('technologies_4'),
            'technologies_5'=> request('technologies_5'),
            'technologies_6'=> request('technologies_6'),
            'technologies_7'=> request('technologies_7'),
            'technologies_8'=> request('technologies_8'),
            'technologies_9'=> request('technologies_9'),
            'technologies_10'=> request('technologies_10'),

            'title_skills_1' =>request('title_skills_1'),
            'title_skills_2' =>request('title_skills_2'),
            'title_skills_3' =>request('title_skills_3'),
            'title_skills_4' =>request('title_skills_4'),
            'title_skills_5' =>request('title_skills_5'),
            'title_skills_6' =>request('title_skills_6'),
            'title_skills_7' =>request('title_skills_7'),
            'title_skills_8' =>request('title_skills_8'),
            'title_skills_9' =>request('title_skills_9'),
            'title_skills_10' =>request('title_skills_10'),
            'title_skills_11' =>request( 'title_skills_11'),
            'title_skills_12' =>request('title_skills_12'),
            'title_skills_13' =>request('title_skills_13'),
            'title_skills_14' =>request('title_skills_14'),
            'title_skills_15' =>request( 'title_skills_15'),
            'title_skills_16' =>request( 'title_skills_16'),
            'title_skills_17' =>request('title_skills_17'),
            'title_skills_18' =>request('title_skills_18'),
            ]);
         return redirect()->route('home', ['posts' => $post->id]);
    }
}
