
@extends('layouts.app')

@section('title', 'Regions')

@section('content')
    <p>All Prevouse years votes: </p>
    <ul>
        @foreach ($regions as $region)
            <li>{{$region->name}}</a></li>
        @endforeach
    </ul>
@endsection