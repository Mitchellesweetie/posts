@extends('layouts.index')

@section('content')

    <h1>hello{{ $tittle }}</h1>
    <p>world services</p>
    @if (count($service)>0)
    <ul>
       @foreach ($service as $services )
       <li>{{ $services }}</li>

       @endforeach
    </ul>

    @endif

@endsection
