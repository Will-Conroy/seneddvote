
@extends('layouts.app')

@section('title', 'representatives')

@section('content')
    <p>All Prevouse years votes: </p>
    <ul>
        @foreach($representatives as $representative)
            <li>{{$representative->name}}</a></li>
        @endforeach
    </ul>
@endsection