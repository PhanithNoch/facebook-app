<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
       $posts = Post::with(['user','comments'])->get(); ///get post with user who is the owner of the post
       
       $user = Auth::user();  /// get current user
        return view('posts.index', compact('posts','user'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $profilePath = null;
       
        $data = $request->all();
        if ($request->hasFile('image')) {

            $request->file('image')->store('public/posts');
            $profilePath = $request->file('image')->hashName();
            $data['image_url'] = $profilePath;
        }
        $data['title'] = $request->content;
        $data['user_id'] = Auth::id();

        Post::create($data);
        return redirect()->route('posts.index');
    }
}
