@extends('layouts.collumMaps')

@section('header')
    <h1>{{$constituency['name']}}</h1>
    <p>{{$constituency['name']}} results for the 
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
            var string = "var regionCoords = " +{!! json_encode($regionCoordinates) !!};
            eval(string);
            
            regionPoly = L.polygon(regionCoords).addTo(map2).bindPopup(regionName);
            map1.fitBounds(regionPoly.getBounds());
            map2.fitBounds(regionPoly.getBounds());
        </script>
@endsection


@section('topMap')
    <script>   
        var string = "var constituencyCoords = " +{!! json_encode($constitCoordinates) !!};
        eval(string)
        var constituencyColour = {!! json_encode($constituency['colour']) !!};
        poly = L.polygon(constituencyCoords, {color:constituencyColour}).addTo(map1).bindPopup(message);
        
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
            <td>{{$constituency['electorate']}}</td>
            <td>{{$constituency['votes_cast']}}</td>
            <td id="turnOut"></td>
            <td> <a href = {{ route('region.show',['region'=>$region['id']])}}>{{$region['name']}}</a></td>
        </tr>
    </table>
    <script>
    
            document.getElementById("turnOut").innerHTML = ({!! json_encode($constituency['votes_cast']) !!}/{!! json_encode($constituency['electorate']) !!} * 100).toFixed(2) + '%';
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
            <td><img src= {{asset( $constituency['seat']['partyImage'])}} class="rounded" width= "50" height= "50"></td>
            <td><a href = {{ route('party.show',['party'=>$constituency['seat']['partyID']])}}>{{$constituency['seat']['partyName']}}</a></td>
            <td><a href = {{ route('representative.show',['representative'=>$constituency['seat']['repID']])}}>{{$constituency['seat']['repName']}}</a></td>
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
                    <script>document.write(({!! json_encode($vote['votes']) !!}/{!! json_encode($constituency['votes_cast']) !!} * 100).toFixed(2) + '%');</script>
                </td>
                </tr>
        
        @endforeach
      
    </table>
  
@endsection

