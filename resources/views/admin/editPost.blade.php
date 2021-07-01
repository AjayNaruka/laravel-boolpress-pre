@extends('layouts.layoutTemplate')
@section('content')
<div class="container">
  <h1>EDIT: </h1>
  <form action="{{route('admin.posts.update',$post)}}" method="post">
  @csrf
  @method('PATCH')
  <div class="my-2">
    <label class="label-control" for="title">TITLE</label>
    <input class="form-control" type="text" name="title" id="title" value="{{$post['title']}}">
  </div>
  <div class="my-2">
    <label class="label-control" for="content">CONTENT</label>
    <textarea class="form-control" name="content" id="content" cols="30" rows="5">{{$post['content']}}</textarea>
  </div>
  <button type="submit" class="btn btn-success">EDIT</button>
  </form>
</div>
@endsection