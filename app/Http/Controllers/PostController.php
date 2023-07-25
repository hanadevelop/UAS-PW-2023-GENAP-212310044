<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('post.index', [
            "Posts" => Post::all()
        ]);
    //     return view('post', [
    //         "title" => "Post",
    //         "posts" => Post::all()
    //     ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create',[
            'posts' => Post::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        
        $validateData = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'image|file|max:2048' 
        ]);
        
        $validateData['gambar'] = $request->file('gambar')->store('post-image');

        Post::create($validateData);
        return redirect('/post')->with('succes', "Menu created successfully.", $validateData);
       

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::where('id',$id)->first();        
        return view('post.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $update =[
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'image|file|max:2048' 
        ];

        $validateData = $request->validate($update);
        $validateData['gambar'] = $request->file('gambar')->store('post-image');

        Post::where('id', $post->id)->update($validateData);
        return redirect('/post')->with('succes', 'Post has been update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/post')->with('succes', "Post has been deleted.");
    }
}
