<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts=Post::with('user')->get();
        return view('policy.index',compact('posts'));
    }

    public function show(post $post){
        $this->authorize('view',$post);
        return view('policy.show')->with('post',$post);
    }
    public function delete(post $post)
    {
         $this->authorize('delete',$post);
        
       $post->delete();
        return redirect()->route('post.index');
    }
}
