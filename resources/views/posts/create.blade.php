create posts
@extends('layouts.index')

@section('content')
<h5>FORM</h5>
<form method='post' action='{{ url('/store') }}'class='form-control' style="height: 300px ; width:400px;">
    @csrf
<div class="mb-3" >
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tittle" name="title">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"></textarea>
  </div>

  <button type="submit">Submit</button>
</form>

@endsection
