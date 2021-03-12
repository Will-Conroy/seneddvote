@extends('layouts.doubleMap')

@section('title', 'Year')


@section('map1')
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    
    <div id="regionalMap" style="width: 500px; height: 700px;"></div>


    <script>

        <!-- Making map, location and then zoom-->

        var mymap = L.map('regionalMap').setView([52.5, -4.01], 8);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);
    </script>
    @foreach ($regions as $region)
        <script>        
        var regionName = {!! json_encode($region->name) !!};
        var regionCoords = {!! json_encode($coordinates[$region->name]) !!};
        L.polygon(regionCoords).addTo(mymap).bindPopup(regionName);
        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent( e.latlng.toString())
                .openOn(mymap);
        }

        mymap.on('click', onMapClick);
    </script>
        
    @endforeach
    
@endsection

@section('map2')
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    
    <div id="constitunceyMap" style="width: 500px; height: 700px;"></div>


    <script>

        <!-- Making map, location and then zoom-->

        var mymap = L.map('constitunceyMap').setView([52.5, -4.01], 8);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);
    </script>
    
    @foreach ($constituencies as $constituency)
        <script>
        
        var constituencyName = {!! json_encode($constituency->name) !!};
        var constituencyCoords = {!! json_encode($coordinates[$constituency->name]) !!};
        L.polygon(regionCoords).addTo(mymap).bindPopup(constituencyName);
        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent( e.latlng.toString())
                .openOn(mymap);
        }

        mymap.on('click', onMapClick);
    </script>
        
    @endforeach
    
@endsection
