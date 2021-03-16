@extends('layouts.doubleMap')
@section('header')
    <h1>{{$year->name}}</h1>
    <p>Over view of {{$year->name}} results</p>
@endsection


@section('seats')
    @foreach ($constituencies as $constituency)
        <img src= {{asset($winners[$constituency->name]->party->image)}} class="rounded" width= "50" height= "50"> 
    @endforeach



@endsection
@section('map1Title','Regions')
@section('map1')

    @foreach ($regions as $region)
        <script>  
            var regionName = {!! json_encode($region->name) !!};
            var regionCoords = {!! json_encode($coordinates[$region->name]) !!};
            L.polygon(regionCoords).addTo(map1).bindPopup(regionName);
            function onMapClick(e) 
            {
                popup
                    .setLatLng(e.latlng)
                    .setContent( e.latlng.toString())
                    .openOn(map1);
            }
            map1.on('click', onMapClick);
        </script>
    @endforeach
@endsection
@section('map2Title','Constituncies')
@section('map2')
    @foreach ($constituencies as $constituency)
        <script>      
            var constituencyName = {!! json_encode($constituency->name) !!};
            var constituencyCoords = {!! json_encode($coordinates[$constituency->name]) !!};
            var constituencyColour = {!! json_encode($colours[$winners[$constituency->name]->name]) !!};
            messsage = '<h4>'+constituencyName +'</h4><h5>Party:'+ {!! json_encode($winners[$constituency->name]->party->name) !!} +
            '</h5><h5>Rep: '+ {!! json_encode($winners[$constituency->name]->name) !!}+'</h5>'; 
            L.polygon(constituencyCoords, {color:constituencyColour}).addTo(map2).bindPopup(messsage);
            function onMapClick(e) 
            {
                popup
                    .setLatLng(e.latlng)
                    .setContent( e.latlng.toString())
                    .openOn(map2);
            }
            map2.on('click', onMapClick);
        </script>
    @endforeach
@endsection
