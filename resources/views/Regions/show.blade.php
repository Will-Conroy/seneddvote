@extends('layouts.collumMaps')

@section('header')
    <h1>{{$region['name']}}</h1>
    <p>{{$region['name']}} results for the 
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

@section('topMap')
        <script> 
            var regionName = {!! json_encode($region['name']) !!};
            var string = "var regionCoords = " + {!! json_encode($regionCoordinates) !!};
            eval(string);
            var regionColour = {!! json_encode($region['colour']) !!};
            regionPoly = L.polygon(regionCoords, {color:regionColour}).addTo(map1).bindPopup(regionName);
            map1.fitBounds(regionPoly.getBounds());
        
        </script>
@endsection


@section('bottomMap')
    @foreach ($constituencies as $constituency)
    
        <script>   
            var string = "var constituencyCoords = " +{!! json_encode($constitCoordinates[$constituency['id']]) !!};
            eval(string)
            var constituencyColour = {!! json_encode($constituency['colour']) !!};
            var url = '{{ route("constituency.show",  ["constituency"=>":id"]) }}';
            url = url.replace(':id',  {!! json_encode($constituency['id']) !!});
            var message = "<a href=" + url +">"   +  {!! json_encode($constituency['name']) !!}  + "</a>";
            L.polygon(constituencyCoords, {color:constituencyColour}).addTo(map2).bindPopup(message);
        </script>
    @endforeach
    <script>
        map2.fitBounds(regionPoly.getBounds());
    </script>

@endsection





@section('references')
    Election Data was collected from <a href = "https://business.senedd.wales/mgManageElectionResults.aspx">The senedd bussiness pages</a>.



@endsection


@section('mapTopTitle','Regions')

@section('rightCollum')
    
    <table style="width:100%" class="table table-borderless table-striped table-earning">
        <tr>
            <th>Electorate</th>
            <th>Valid votes cast</th>
            <th>Turn out</th>
            <th>No. Seats</th>
            <th>No. Constituencies</th>
        </tr>
        <tr>
            <td>{{$region['electorate']}}</td>
            <td>{{$region['votes_cast']}}</td>
            <td id="turnOut"></td>
            <td>{{$region['seatCount']}}</td>
            <td>{{$region['constituencyCount']}}</td>
        </tr>
        
    </table>
     <script>
            document.getElementById("turnOut").innerHTML = ({!! json_encode($region['votes_cast']) !!}/{!! json_encode($region['electorate']) !!} * 100).toFixed(2) + '%';
    </script>
    <hr class="my-4">

    <h4>Seats</h4>
    <hr class="my-4">
    <table style="width:100%" class="table table-borderless table-striped table-earning">
        <tr>
            <th>Party</th>
            <th></th>
            <th>Name</th>
        </tr>

        @foreach ($region['seats'] as $seat)
            <tr>
                <td><img src= {{asset( $seat['partyImage'])}} class="rounded" width= "50" height= "50"></td>
                <td><a href = {{ route('party.show',['party'=>$seat['partyID']])}}>{{$seat['partyName']}}</a></td>
                <td><a href = {{ route('representative.show',['representative'=>$seat['repID']])}}>{{$seat['repName']}}</a></td>
            </tr>
        @endforeach
        
    </table>
    <hr class="my-4">
    <h4>Parties</h4>
    <hr class="my-4">
    <table style="width:100%" class="table table-borderless table-striped table-earning">
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
                    <script>document.write(({!! json_encode($vote['votes']) !!}/{!! json_encode($region['votes_cast']) !!} * 100).toFixed(2) + '%');</script>
                </td>
                </tr>
            

        @endforeach
      
    </table>
  
@endsection

