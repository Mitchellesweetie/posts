@extends('layouts.index')
@section('content')
<div>
    <h3>POST</h3>

</div>

<div class="row container">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
            @if(count($posts)>0)

            <table class="table table-stripped">
                <tr><th>Title</th>
                    <th></th>
                    <th></th>
                </tr>

                @foreach ($posts as $post )

                <tbody>

                        {{-- @if (count($posts) > 0) --}}
                        <tr>
                            <th>{{ $post->title }}</th>
                            <th>{{ $post->created_at }}</th>
                            <th> <a href="/edit/{{ $post->id }}" >Edit</a> </th>
                       </tr>


                        {{-- @else
                        <p>No post found</p> --}}

                            {{-- @endif --}}

                </tbody>
                @endforeach

            </table>

            @else
            <h3>No posts</h3>

            @endif

                                    {{-- {{ $posts->links('pagination::bootstrap-5') }} --}}

        </div>
      </div>
    </div>

  </div>






@endsection
