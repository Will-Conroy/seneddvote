@extends('layouts.collumMaps')

@section('header')
    <h1>{{$party->name}}</h1>
    <p>Overview of {{$party->name}}'s results in {{$year}}</p>
@endsection


@section('topMapOptions')
    <script>
        var topMapView = [52.5, -4.01];
        var topMapZoom = 7;
    </script>
@endsection


@section('bottomMapOptions')
    <script>
        var bottomMapView = [52.5, -4.01];
        var bottomMapZoom = 7;
    </script>
@endsection

@section('bottomMap')
    @foreach ($constituencies as $constituency)
        <script>   
            var string = "var constituencyCoords = " +{!! json_encode($coordinates[$constituency['name']]) !!};
            eval(string)
            var constituencyColour = {!! json_encode($constituency['colour']) !!};
            var constitfillOpacity = {!! json_encode($constituency['seat']['opacity']) !!};
            var url = '{{ route("constituency.show",  ["constituency"=>":id"]) }}';
            url = url.replace(':id',  {!! json_encode($constituency['id']) !!});
            var message = "<a href=" + url +">"   +  {!! json_encode($constituency['name']) !!}  + "</a>";
            L.polygon(constituencyCoords, {color:constituencyColour, fillOpacity:constitfillOpacity}).addTo(map2).bindPopup(message);
        </script>
    @endforeach
@endsection

@section('topMap')
    @foreach ($regions as $region)
        <script> 
            var string = "var regionCoords = " +{!! json_encode($coordinates[$region['name']]) !!};
            eval(string);
            var regionColour = {!! json_encode($region['colour']) !!};
            var url = '{{ route("region.show",  ["region"=>":id"]) }}';
            url = url.replace(':id',  {!! json_encode($region['id']) !!});
            var message = "<a href=" + url +">"   +  {!! json_encode($region['name']) !!}  + "</a>";
            L.polygon(regionCoords, {color:regionColour}).addTo(map1).bindPopup(message);        
        </script>
    @endforeach
@endsection





@section('rightCollum')
    <table style="width:100%" class="table table-borderless table-striped table-earning">
        <tr>
            <th>Region</th>
            <th>Constituency</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>{{$regionSeatTotal}}</td>
            <td>{{$constituencySeatTotal}}</td>
            <td><script>document.write({!! json_encode($regionSeatTotal) !!}+{!! json_encode($constituencySeatTotal) !!});</script></td>
        </tr>
    </table>
    <hr class="my-4">
    <table style="width:100%" class="table table-borderless table-striped table-earning">
        <tr>
            <th>Region</th>
            <th>Votes</th>
            <th>Seats</th>
        </tr>
        @foreach($regionalVotes as $votes)
            <tr>
                <td><a href = {{ route('region.show',['region'=>$votes['id']])}}>{{$votes['name']}}</a></td>
                <td>{{$votes['votes']}}</td>
                <td>{{$votes['seats']}}</td>
            </tr>
        @endforeach
        
    </table>
    <hr class="my-4">
    <table style="width:100%" class="table table-borderless table-striped table-earning">
        <tr>
            <th>Constituency</th>
            <th>Votes</th>
            <th>Seats</th>
        </tr>
        @foreach($constituencyVotes as $votes)
            <tr>
                <td><a href = {{ route('constituency.show',['constituency'=> $votes['id']])}}>{{$votes['name']}}</a></td>
                <td>{{$votes['votes']}}</td>
                <td>{{$votes['seats']}}</td>
            </tr>
        @endforeach
        
    </table>
    <hr class="my-4">
  
@endsection




@section('references')
    Election Data was collected from <a href = "https://business.senedd.wales/mgManageElectionResults.aspx">The senedd bussiness pages</a>.
@endsection
