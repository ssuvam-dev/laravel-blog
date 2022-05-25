<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Models\post\post;

class Postcontroller extends Controller
{
    // function to show the home page
    public function index(){
        $posts = post::all();
        $data=compact('posts');
        return view('home.home')->with($data);
    }
    //function to show the form to add post
    public function showform(){
            return view('post.addpost');
    }
//functtion to add post to the database
    public function addpost(Request $request){
        $request ->validate(
            [
                'title'=> 'required',
                'content'=>"required",
            ]
            );
            $name=$request->file('image')->getClientOriginalName();
            $request->file('image')->store('public/images/featureimage',$name);
            $posts=new post;
            
            $posts->title = $request['title'];
            $posts->content = $request['content'];
            $posts->image=$name;
            $posts->user="Default";
            $posts->save();
            return view('post.addpost');

    }
}
