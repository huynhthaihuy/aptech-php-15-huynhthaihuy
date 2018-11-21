<?php

namespace App\Http\Controllers;
use App\Post;
use App\Comment;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $posts = Post::with('comment')->get();
        return view('post.index',['posts' => $posts]);
        }
        public function commentindex(){
            $comments = Category::with('post')->get()->toArray();
            return view('post.comment',['comments' => $comments]);
        }
}
