@extends('admin.layout.admin_layout')
@section('admin_content')

<div class="card text-bg-info" >
    <div class="card-header">{{$comment->title}}</div>
    <div class="card-body">
      <h5 class="card-title">Author:{{$comment->user->name}} <br> Article:{{$comment->article->title}}</h5>

      <p class="card-text">{!!$comment->description!!}</p>
    </div>
  </div>
@endsection
