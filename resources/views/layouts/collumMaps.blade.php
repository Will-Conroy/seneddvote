@extends('layouts.app')

    @section('content')
        <head>
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
        </head> 
        <body>
            @if (session('message'))
                <p><b>{{session('message')}}</b></p>
            @endif
            
            @if ($errors->any())
            <div>
                Errors:
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @yield('topMapOptions')
            @yield('bottomMapOptions')
            <div class="row justify-content-center">
                <div class="col">
                    <div class="row">
                        <link rel="stylesheet" href="{{ asset('css/mapstyle.css') }}">
                        <script src="https://unpkg.comleaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
                        <div class ="row" id="map1" style="width: 1000px; height: 450px;"></div>
                        <script>
                            <!-- Making map, location and then zoom-->
                            var map1 = L.map('map1',{ scrollWheelZoom: false, zoomControl: false  }).setView(topMapView, topMapZoom);
                            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                                maxZoom: 18,
                                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                                id: 'mapbox/streets-v11',
                                tileSize: 512,
                                zoomOffset: -1
                            }).addTo(map1);
                            new L.Control.Zoom({ position: 'topright' }).addTo(map1);
                            map1._layersMinZoom=7;
                        </script>
                        @yield('topMap')
                    </div>
                    <hr class="my-4">
                    <div class="row">
                        <div id="map2"  style="width: 1000px; height: 450px;"></div>
                            <script>
                                <!-- Making map, location and then zoom-->
                                var map2 = L.map('map2',{ scrollWheelZoom: false, zoomControl: false }).setView(bottomMapView, bottomMapZoom);
                                L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                                    maxZoom: 18,
                                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                                        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                                        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                                    id: 'mapbox/streets-v11',
                                    tileSize: 512,
                                    zoomOffset: -1
                                }).addTo(map2);
                                new L.Control.Zoom({ position: 'topright' }).addTo(map2);
                                map2._layersMinZoom=7;
                            </script>
                            @yield('bottomMap')
                        </div>
                    </div>   
                    <div class = "col">
                            @yield('rightCollum')
                    </div>
            </div>
            <hr class="my-4">
        </body>
    @endsection


    
    
</html>

