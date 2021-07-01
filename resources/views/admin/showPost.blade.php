@extends('layouts.layoutTemplate')
@section('content')
<div class="container my-2">
  <h1>ID: {{$post['id']}}</h1>
  <a  href="{{route('admin.posts.edit',$post)}}"><button class="btn btn-secondary my-3" >EDIT</button></a>
  <h4><u>Title</u>: {{$post['title']}}</h4>
  <h4><u>Content:</u></h4>
  <p>{{$post['content']}}</p>
  <a href="{{route('admin.posts.index')}}"><< Go Back</a>
</div>
@endsection