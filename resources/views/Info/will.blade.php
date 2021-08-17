@extends('layouts.app')
@section('header')
    <h1>Will</h1>
    <p>William Conroy's Portfolio</p>
@endsection



    @section('content')
    <h3>Personal Projects</h3>
    <h4>Senedd Vote</h4>
    <div class="row justify-content-center">
        
            <div class="col">
            <img src="{{url('/will/SeneddVoteDemo.gif')}}" class="rounded float" alt="Animated Gif of maps">
            </div>
            <div class="col">
            text
            </div>
    </div>
    <h4>Ant Game</h4>
    <div class="row justify-content-center">
            <div class="col">
                image
            </div>
            <div class="col">
            text
            </div>
    </div>

    <h3>Educational Projects</h3>
    <h4>C++</h4>
    <div class="row justify-content-center">
            <div class="col">
                image
            </div>
            <div class="col">
            text
            </div>
    </div>

    @endsection


    
    
</html>

