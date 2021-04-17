@extends('layouts.map')

@section('header')
    <h1>{{$constituency->name}}</h1>
    <p>Over view of {{$constituency->name}} results</p>
@endsection


@section('references')
    Election Data was collected from <a href = "https://business.senedd.wales/mgManageElectionResults.aspx">The senedd bussiness pages</a>.
@endsection