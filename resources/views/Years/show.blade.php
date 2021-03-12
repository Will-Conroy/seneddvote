@extends('layouts.doubleMap')
@section('title', 'Year')


@section('seats')

@endsection

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

@section('map2')
    @foreach ($constituencies as $constituency)
        <script>        
            
            var constituencyName = {!! json_encode($constituency->name) !!};
            var constituencyCoords = {!! json_encode($coordinates[$constituency->name]) !!};
            var constituencyColour = {!! json_encode($colours[$constituency->name]) !!};
            L.polygon(constituencyCoords, {color:constituencyColour}).addTo(map2).bindPopup(constituencyName);
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
