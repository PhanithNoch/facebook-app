<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class CommentController extends Controller
{
    
    public function store(Request $request, $id)
    {
        $data = $request->all(); // get request from user
        $data['user_id'] = Auth::id(); // get current user
        $data['post_id'] = $id; // get post id
        Comment::create($data); // create comment
        return redirect()->route('posts.index'); // redirect to post index
    }
}
