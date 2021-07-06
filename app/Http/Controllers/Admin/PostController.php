<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;
use App\Tag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $posts = Post::all();
        $data = ['posts'=>$posts,'categories'=>$categories];
        return view('admin.posts',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin.createPost',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $data = $request->all();
        /* dd($data); */
        $data['slug']= Str::slug($data['title'],'-');
        $new_post = new Post();
        $new_post->fill($data);
        $new_post->save();

        $new_post->tags()->attach($data['tags']);

        return redirect()->route('admin.posts.show',$new_post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.showPost',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = Tag::all();
        $post = Post::find($id);
        return view ('admin.editPost',compact('post','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $data = $request->all();
        $data['slug']= Str::slug($data['title'],'-');
        $toEditPost = Post::find($id);
        $toEditPost->update($data);

        $toEditPost->tags()->sync($data['tags']);
        return redirect()->route('admin.posts.show',$toEditPost); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $toDeletePost = Post::find($id);
        $toDeletePost->delete();
        return redirect()->route('admin.posts.index');
    }
}
