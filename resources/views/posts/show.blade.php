
@extends('layouts.index')
@section('content')
<h4>POSTS</h4>
<button type="button" class="btn btn-primary"><a href="/posts" >Go Back</a></button>
 <div >

    <div class="md-4">
        <img src="/storage/cover-images/{{ $post->cover_image }}"/>
        <h5>  {{ $post->title }} </h5>
        <hr/>
        <small>written on {{ $post->created_at }}</small>
        {{ $post->body }}
        <hr/>


    </div>

  @if(!Auth::guest())
   @if (Auth::user()->id==$post->user_id)

    <button type="button" class="btn btn-warning"><a href="/edit/{{ $post->id }}" >Edit</a></button>
    <button type="button" class="btn btn-warning"><a href="/delete/{{ $post->id }}" >Delete</a></button>
  @endif
  @endif


 <div>





@endsection
