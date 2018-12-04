<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $categories = Category::all();
        return view('index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('create',['categories' => $categories]);
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
        $categories = new Category;
        $categories->name = $request->name;
        $categories->save();
        $posts = Post::find($id);
        $categories->posts()->attach($post);
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::with('posts')->find($id);
        //  dd($users);
        // $users = DB::table('users')->where('id', $id)->get();
        // dd($categories);
        return view('show', ['category' => $categories 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories= Category::with('posts')->find($id);
        return view('.edit', ['category' => $categories]);
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
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::with('posts')->find($id)->delete();
        // dd($user);
        return redirect()->route('categories.index');
    }
}