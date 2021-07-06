@extends('layouts.layoutTemplate')
@section('content')
<div class="container">
  <h1>CREATE: </h1>
  <form action="{{route('admin.posts.store')}}" method="post">
  @csrf
  @method('POST')
  <div class="my-2">
    <label class="label-control" for="title">TITLE</label>
    <input class="form-control" type="text" name="title" id="title" value="{{old('title')}}">
    @error('title')
      <div class="alert alert-danger my-1">{{$message}}</div>
    @enderror
  </div>
  <div class="my-2">
    <label class="label-control" for="content">CONTENT</label>
    <textarea class="form-control" name="content" id="content" cols="30" rows="5">{{old('content')}}</textarea>
    @error('content')
      <div class="alert alert-danger my-1">{{$message}}</div>
    @enderror
  </div>
  
  <div class="my-2">
    <span>TAGS: <br></span>
    {{-- CHECKBOXES --}}
  @foreach ($tags as $tag)
  <input type="checkbox" id="tag{{$loop->index}}" name="tags[]" value="{{$tag->id}}" 
  @if (in_array($tag->id, old('tags',[]))) checked
    
  @endif>
  <label for="tag{{$loop->index}}">{{$tag['title']}}</label>
@endforeach
  </div>
  <button type="submit" class="btn btn-success">CREATE</button>

  

  </form>
</div>
@endsection