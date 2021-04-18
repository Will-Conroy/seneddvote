@extends('layouts.collumMaps')

@section('header')
    <h1>{{$constituency->name}}</h1>
    <p>{{$constituency->name}} results for the 
    <a href = {{ route('years.show',['year'=>$year['id']])}}>{{$year['name']}}</a>
    election.</p>
@endsection

@section('references')
    Election Data was collected from <a href = "https://business.senedd.wales/mgManageElectionResults.aspx">The senedd bussiness pages</a>.
@endsection

@section('topMapOptions')
    <script>
        var topMapView = [53.15, -2.4];
        var topMapZoom = 8;
    </script>
@endsection


@section('bottomMapOptions')
    <script>
        var bottomMapView = [52.5, -4.01];
        var bottomMapZoom = 8;
    </script>
@endsection

@section('bottomMap')
        <script> 
            var regionName = {!! json_encode($region['name']) !!};
            var regionCoords = {!! json_encode($regionCoordinates) !!};
            var regionColour = {!! json_encode($regionColour) !!};
            regionPoly = L.polygon(regionCoords, {color:regionColour}).addTo(map2).bindPopup(regionName);
            map1.fitBounds(regionPoly.getBounds());
            map2.fitBounds(regionPoly.getBounds());
        </script>
@endsection


@section('topMap')
    <script>   
        var constituencyCoords = {!! json_encode($constitCoordinates) !!};
        var constituencyColour = {!! json_encode($constitColours) !!};
        L.polygon(constituencyCoords, {color:constituencyColour}).addTo(map1).bindPopup(message);
    </script>
@endsection

@section('rightCollum')
    
    <table style="width:100%">
        <tr>
            <th>Electorate</th>
            <th>Valid votes cast</th>
            <th>Turn out</th>
            <th>Region</th>
        </tr>
         <tr>
            <td>{{$constituency->electorate}}</td>
            <td>{{$constituency->votes_cast}}</td>
            <td id="turnOut"></td>
            <td> <a href = {{ route('region.show',['region'=>$region['id']])}}>{{$region['name']}}</a></td>
        </tr>
    </table>
    <script>
            document.getElementById("turnOut").innerHTML = ({{$constituency->votes_cast}}/{{$constituency->electorate}} * 100).toFixed(2) + '%';
    </script>
   
    <hr class="my-4">

    <h4>Seat</h4>
    <hr class="my-4">
    <table style="width:100%">
        <tr>
            <th>Party</th>
            <th></th>
            <th>Name</th>
        </tr>
        <tr>
            <td><img src= {{asset( $constitWinner['party']['image'])}} class="rounded" width= "50" height= "50"></td>
            <td><a href = {{ route('party.show',['party'=>$constitWinner['party']['id']])}}>{{$constitWinner['party']['name']}}</a></td>
            <td><a href = {{ route('representative.show',['representative'=>$constitWinner['id']])}}>{{$constitWinner['name']}}</a></td>
        </tr>
    </table>
    <hr class="my-4">
    <h4>Parties</h4>
    <hr class="my-4">
    <table style="width:100%">
        <tr>
            <th>Party</th>
            <th></th>
            <th>Represenative</th>
            <th>Votes</th>
            <th>%</th>
        </tr>
        
        @foreach ($votes as $vote)
            <tr>
                <td><img src= {{asset( $vote['image'])}} class="rounded" width= "50" height= "50"></td>
                 <td><a href = {{ route('party.show',['party'=>$vote['party']['id']])}}>{{$vote['party']['name']}}</a></td>
                <td>
                @foreach ($vote['names'] as $name)
                   {{$name}},
                @endforeach
                </td>
                <td>{{ $vote['votes']}}</td>
                 <td>
                    <script>document.write(({{$vote['votes']}}/{{$constituency->votes_cast}} * 100).toFixed(2) + '%');</script>
                </td>
                </tr>
        
        @endforeach
      
    </table>
  
@endsection

