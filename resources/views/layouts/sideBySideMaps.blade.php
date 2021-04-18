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
            @yield('leftMapOptions')
            @yield('rightMapOptions')
    
            <div class="row justify-content-center">
                <div class="col-lg">
                    <link rel="stylesheet" href="{{ asset('css/mapstyle.css') }}">
                    <script src="https://unpkg.comleaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
                    <div class ="row" id="map1" style="width: 100%; height: 700px;"></div>
                    <script>
                        <!-- Making map, location and then zoom-->
                        var map1 = L.map('map1',{ scrollWheelZoom: false, zoomControl: false  }).setView(leftMapView, leftMapZoom);
                        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                            maxZoom: 18,
                            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                            id: 'mapbox/streets-v11',
                            tileSize: 512,
                            zoomOffset: -1
                        }).addTo(map1);
                        new L.Control.Zoom({ position: 'bottomleft' }).addTo(map1);
                        map1._layersMinZoom=7;
                    </script>
                    @yield('mapLeft')
                </div>

                <div class="col-lg">
                    <div id="map2"  style="width: 100%; height: 700px;"></div>
                    <script>
                        <!-- Making map, location and then zoom-->
                        var map2 = L.map('map2',{ scrollWheelZoom: false, zoomControl: false }).setView(rightMapView, rightMapZoom);
                        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                            maxZoom: 18,
                            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                            id: 'mapbox/streets-v11',
                            tileSize: 512,
                            zoomOffset: -1
                        }).addTo(map2);
                        new L.Control.Zoom({ position: 'bottomleft' }).addTo(map2);
                        map2._layersMinZoom=7;
                        
                    </script>
                    @yield('mapRight')
                </div>
            </div>

            <div class="container" id="tables">
                <div class="row">
                    <div class = "col">
                    <h4 id = "mapLeftTableHeader">
                        @yield('mapLeftTitle')
                    </h4>
                    <table id="leftTable" class="table table-borderless table-striped table-earning">
                        <thead>
                            @yield('mapLeftTable')
                        </thead>
                        <tbody id="leftTableBody"></tbody>
                    </table>
                </div>
                <div class = "col">
                    <h4 id = "mapRightTableHeader">
                        @yield('mapRightTitle')
                    </h4>
                    <table id="RightTable" class="table table-borderless table-striped table-earning">
                        <thead>
                            @yield('mapRightTable')
                        </thead>
                        <tbody id="rightTableBody"></tbody>
                    </table>
                </div>
            </div>  

            <hr class="my-4">
            
            <h2>Seats</h2>
            <div class="row">
            
                <div class="col-sm">
                    @yield('seatsLeft')
                </div>
      
                <div class="col-sm">
                    @yield('seatsRight')
                </div>
            </div>
        </body>
    @endsection


    
    
</html>

