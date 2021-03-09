
@extends('layouts.app')

@section('title', 'Years')

@section('content')
    <p>All Prevouse years votes: </p>
    <ul>
        @foreach ($years as $year)
            <li>{{$year->name}}</a></li>
        @endforeach
    </ul>
@endsection