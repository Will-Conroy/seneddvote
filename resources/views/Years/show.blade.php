@extends('layouts.doubleMap')
@section('header')
    <h1>{{$year->name}}</h1>
    <p>Over view of {{$year->name}} results</p>
@endsection


@section('seats')
    
    <h5>Regions</h5>
    @foreach ($seats as $seat)
        @if ($seat->regional)
            <img src= {{asset($winners[$seat->id]->party->image)}} class="rounded" width= "50" height= "50">
        @endif
    @endforeach
    <br>
    <h5>Constituencies</h5>
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
            var regionColour = {!! json_encode($colours[$region->name]) !!};
            message = '<h4>'+regionName +'</h4><h5>Party: '; 
            L.polygon(regionCoords, {color:regionColour}).addTo(map1).bindPopup(message);
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




@section('map2Title','Constituencies')
@section('map2')
    @foreach ($constituencies as $constituency)
        <script>      
            var constituencyName = {!! json_encode($constituency->name) !!};
            var constituencyCoords = {!! json_encode($coordinates[$constituency->name]) !!};
            var constituencyColour = {!! json_encode($colours[$winners[$constituency->name]->name]) !!};
            messsage = '<h4>'+constituencyName +'</h4><h5>Party: '+ {!! json_encode($winners[$constituency->name]->party->name) !!} +
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
