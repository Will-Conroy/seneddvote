@extends('layouts.map')

@section('header')
    <h1>{{$party->name}}</h1>
    <p>Over view of {{$party->name}} results</p>
@endsection


@section('references')
    Election Data was collected from <a href = "https://business.senedd.wales/mgManageElectionResults.aspx">The senedd bussiness pages</a>.



@endsection