<!doctype html>
<html lang="en">


    <!--Styles -->

    <link href="/CSS/main.css" rel="stylesheet">
    <head>

        <title>Maps - @yield('title')</title>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    </head> 
    <body>
     <h1> Senedd Vote - @yield('title')</h1>
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
     <div>
        @yield('content')
     </div>
    </body>
</html>

