create posts
@extends('layouts.index')
@section('content')
<h5>FORM</h5>
<form class='container'method='put' action='{{ route('StoreUpdate', $post->id) }}'class='form-control' style="height: 300px ; width:400px;">
    @csrf
<div class="mb-3" >
    <label for="exampleFormControlInput1" class="form-label">Tittle</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tittle" name="title">{{ $post->title }}
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body">{{ $post->body }}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button></form>

@endsection


