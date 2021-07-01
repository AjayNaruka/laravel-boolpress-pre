@extends('layouts.layoutTemplate')
@section('content')
<div class="container">
  <h1>ADMIN HOME</h1>
  <ul><li><a href="{{route('admin.posts.index')}}">VAI AI POST</a></li></ul>
</div>
 @endsection 