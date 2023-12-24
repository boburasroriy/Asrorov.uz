<?php

namespace App\Http\Controllers;

use App\Models\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostControllerController extends Controller
{
    function store(Request $request){
        if ($request->hasFile('Create_photo')){
            $name = $request->file('Create_photo')->getClientOriginalName();
            $path = $request->file('Create_photo')->storeAs('photos', $name);

        }
        $CreatedPost = PostController::create([
            'id' => $request->id,
            'Create_photo' => $path ?? null,
            'Create_title'=>$request->Create_title,
            'Create_text'=>$request->Create_text,
            'Create_link'=>$request->Create_link,
        ]);

        return redirect()->route('home', $request);    }

    function create()
    {
        return view('posts.adminPost');
    }

    function edit(PostController $adminPosts)
    {
        $adminPosts = PostController::all();
        return view('posts.postEdit')->with(['adminPosts'=> $adminPosts]);
    }

    public function update(Request $request,  PostController $adminPosts, $id)
    {
        PostController::find($id)->update([
            'Create_photo' => request('Create_photo'),
            'Create_title' => request('Create_title'),
            'Create_text' => request('Create_text'),
            'Create_link' => request('Create_link'),
        ]);
        return redirect()->route('home', ['adminPost' => $adminPosts->id]);

    }

    function destroy(PostController $adminPost, $id)
    {
        $adminPost = PostController::findOrFail($id);
        $adminPost->delete();

        return redirect()->route('home');
    }


}
