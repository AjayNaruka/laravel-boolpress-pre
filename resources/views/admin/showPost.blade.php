@extends('layouts.layoutTemplate')
@section('content')
<div class="container my-2">
  <h1>ID: {{$post['id']}}</h1>
  <a  href="{{route('admin.posts.edit',$post)}}"><button class="btn btn-secondary my-3" >EDIT</button></a>
  <h4><u>Title</u>: {{$post['title']}}</h4>
  <h4><u>Content:</u></h4>
  <h4>Categoria: @if ($post->category)
    {{$post->category['name']}}
  @endif</h4>

  @foreach ($post->tags as $tag)
    <span class="badge bg-success">{{$tag['title']}}</span>
  @endforeach

  <p>{{$post['content']}}</p>
  <a href="{{route('admin.posts.index')}}"><< Go Back</a>
</div>
@endsection