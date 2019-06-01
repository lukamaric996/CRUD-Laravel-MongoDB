<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function form($_id = false){
        if($_id){
            $data = Post::findOrFail($_id);
            return view('post.form', compact('data'));
        }
        $data = false;
        return view('post.form', compact('data'));
    }

    public function save(Request $request){
        $data = new Post($request->all());
        $data->created_by = \Auth::user()->email;
        $data->save();

        if($data){
            return redirect()->route('home');
        }else{
            return back();
        }
    }

    public function update(Request $request,$_id){

        $data = Post::findOrFail($_id);
        $data->title = $request->title;
        $data->content = $request->content;
        $data->save();

        if($data){
            return redirect()->route('home');
        }else{
            return back();
        }
    }

    public function delete($_id){
        $data = Post::destroy($_id);
        if($data){
            return redirect()->route('home');
        }else{
            dd('Error can not delete');
        }

    }


}
