@extends('layouts.layoutTemplate')
@section('content')
<div class="container">
  <div class="top my-2 d-flex justify-content-between">
    <h1>POSTS:</h1>
    <a href="{{route('admin.posts.create')}}"><button class="btn btn-success"> CREATE POST</button></a>
  </div>
  
  <div class="posts-container">
    @foreach ($posts as $post)
      <div class="post py-3">
        <h4>{{$post['title']}}</h4> 
        <div class="post-tags">
          @foreach ($post->tags as $tag)
          <span class="badge bg-success">{{$tag['title']}}</span>
        @endforeach</div>
        <a href="{{route('admin.posts.show',$post)}}"><button class="btn btn-primary">OPEN</button></a>
        <a href="{{route('admin.posts.edit',$post)}}"><button class="btn btn-secondary mx-2">EDIT</button></a>
        <form style="display: inline-block" action="{{route('admin.posts.destroy',$post)}}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">DELETE</button></form>
      </div>
    @endforeach

    <h3>CATEGORIES:</h3>
    <div>
      @foreach ($categories as $category )
        <h4>{{$category['name']}} : @foreach ($category->posts as $post )
          {{$post->title}} - 
        @endforeach </h4>
      @endforeach
    </div>
  </div>
</div>

@endsection