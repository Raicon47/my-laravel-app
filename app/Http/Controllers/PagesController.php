<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\post;
use App\Category;
use App\User;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        return view('welcome');
    }

    public function dashboard() {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('pages.dashboard')->with('posts', $user->posts);

        // return view('pages.dashboard');
    }

    public function posts()
    {
        $categories = Category::all();
        $posts = post::orderBy('created_at', 'Desc')->paginate(3);
        return view('pages.cards', compact('categories', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            // 'cover_image' => 'image|nullable|max:1999'
          ]);
        
        //     Handle file upload
        // if($request->hasFile('cover_image')) {
        //     get filename with the extension
        //     $filenameWithEx = $request->file('cover_image')->getClientOriginalName();
        //     get just filename
        //      $filename = pathinfo($filenameWithEx, PATHINFO_FILENAME);
        //     get just ext
        //     $extension = $request->file('cover_image')->getClientOriginalExtension();
        //      filename to store
        //     $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //      upload image
        //     $path = $request->file('cover_image')->storeAs('public/img/cover_images', $fileNameToStore);
        //     } else {
        //       $fileNameToStore = 'noimage.png';
        //     }

          // Create Post
          $post = new post;
          $post->title = $request->input('title');
          $post->body = $request->input('body');
          $post->user_id = auth()->user()->id;
        //   $post->cover_image = $fileNameToStore; 
          $post->save();

          return redirect('/cards')->with('success', 'Your card has been published successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        $categories = Category::all();
        $post = post::find($id);
        return view('pages.show', compact('post', 'categories'));     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();

        // if($post->cover_image !== 'noimage.png') {
        //     Storage::delete('public/img/cover_images/'.$post->cover_image); 
        // }

        return redirect('/cards')->with('success', 'Your card has been deleted successfully');
    }
}
