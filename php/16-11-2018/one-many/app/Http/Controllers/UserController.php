<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //lay ra 2 du lieu
        //$posts = Post::with('category')->take(2)->get();
        // $users = DB::table('users')->get();
        $posts = Post::all();
        return view('index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password'=> $request->password
        // ]);
        // dd($request->ct_id);
        $posts = new Post;
        $posts = Post::with('category');
        $posts->title = $request->title;
        $posts->description = $request->description;
        $posts->content = $request->description;
        $posts->ct_id = $request->ct_id;
        $posts->category->name = $request->category->name;
        $posts->save();
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::with('category')->find($id);
        //  dd($users);
        // $users = DB::table('users')->where('id', $id)->get();
        return view('show', ['post' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::with('category')->find($id);
        return view('edit', ['post' => $posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($request->all());
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::with('category')->find($id)->delete();
        // dd($user);
        return redirect()->route('users.index');
    }
}
