
@extends('layouts.index')
@section('content')
<div>
    <h3>POST</h3>

</div>
@if (count($posts) > 0)
@foreach ($posts as $post )



<div class="row container">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"> <a href="{{ route('showPost', $post->id) }}}}">{{ $post->title }}</a></h5>
          <p class="card-text">written on {{ $post->created_at }}</p>
        </div>
      </div>
    </div>

  </div>

@endforeach
{{ $posts->links('pagination::bootstrap-5') }}


@else
<p>No post found</p>

@endif

@endsection
