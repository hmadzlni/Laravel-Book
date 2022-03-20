<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
   $posts = Post::all(); 
        
   return view('post.index', ['posts' => $posts]); 
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judulBuku',
            'author',
            'penerbit',
            'tahunTerbit',
            'sinopsis' 
          ]);
        
          $input = $request->all();
        
          $post = Post::create($input);
          
          return redirect()->route('index')->with('success',' Data telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
   
        return view('post.show', [
            'post' => $post
     ]);
      }
      public function detail(Request $request, $id)
      {
          $request->validate([
              'judulBuku',
              'author',
              'penerbit',
              'tahunTerbit',
              'sinopsis'
           ]); 
           
           return redirect()->route('index');
      }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
   
   return view('post.edit', [
          'post' => $post
   ]);
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
        $request->validate([
            'judulBuku',
            'author',
            'penerbit',
            'tahunTerbit',
            'sinopsis'
         ]);
               
         $post = Post::find($id)->update($request->all()); 
         
         return redirect()->route('index')->with('success',' Data telah diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

   $post->delete();

   return back()->with('success',' Penghapusan berhasil.');
    }
}
