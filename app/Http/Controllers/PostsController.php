<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostRequest;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    function index(){
        $posts = Posts::with('user')->get();
        
        return view('posts',["posts"=>$posts]);
    }

    function view($id){
    $post = Posts::find($id);
    return view('posts.post',["post"=>$post]);
    }

    function create(){
        return view('posts.create');
    }

    function store(StorePostRequest $request){
        $data = $request->all();
        $post = new Posts();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = Auth::id();
        $post->save();
        return redirect('/posts');

    }

    function edit($id){
    $post = Posts::find($id);
    return view('posts.edit', ["post" => $post]);
    }


    function update(StorePostRequest $request,$id){
        $data = $request->all();
        $post=Posts::find($id);
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->save();
        return redirect("/posts");
    }
    function destroy($id){
        Posts::destroy($id);
        return redirect("/posts");
    }
}
