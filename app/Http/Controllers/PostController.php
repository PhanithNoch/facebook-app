<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('posts.index',compact('user'));
    }
}