
@extends('layouts.app')

@section('title', 'Parties')

@section('content')
    <p>All Prevouse years votes: </p>
    <ul>
        @foreach($parties as $party)
            <li>{{$party->name}}</a></li>
        @endforeach
    </ul>
@endsection