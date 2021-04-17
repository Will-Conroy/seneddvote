
@extends('layouts.app')

@section('title', 'Constituencies')

@section('content')
    <p>All Prevouse years votes: </p>
    <ul>
        @foreach ($constituencies as $constituency)
            <li>{{$constituency->name}}</a></li>
        @endforeach
    </ul>
@endsection