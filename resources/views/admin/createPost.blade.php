@extends('layouts.layoutTemplate')
@section('content')
<div class="container">
  <h1>CREATE: </h1>
  <form action="{{route('admin.posts.store')}}" method="post">
  @csrf
  @method('POST')
  <div class="my-2">
    <label class="label-control" for="title">TITLE</label>
    <input class="form-control" type="text" name="title" id="title">
  </div>
  <div class="my-2">
    <label class="label-control" for="content">CONTENT</label>
    <textarea class="form-control" name="content" id="content" cols="30" rows="5"></textarea>
  </div>
  <button type="submit" class="btn btn-success">CREATE</button>
  </form>
</div>
@endsection