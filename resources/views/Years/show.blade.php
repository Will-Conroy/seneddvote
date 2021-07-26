@extends('layouts.sideBySideMaps')

@section('header')
    <h1>{{$year}}</h1>
    <p>Overview of {{$year}} results</p>
@endsection


@section('seatsLeft')
    <h4>Regions</h4>
    <br>
    @foreach ($regions as $region )
        <h5> {{$region['name']}}</h5>
        @foreach ($region['seats'] as $seat )
        <a href = {{  route("Region.show",  ["region"=> $region['id']])}}>
            <img src= {{asset($seat['partyImage'])}} class="rounded" width= "50" height= "50">
        </a>
        @endforeach
    @endforeach
@endsection

@section('seatsRight')
    <h4>Constituencies</h4>
    <br>
    @foreach ($regions as $region )
        <h5> {{$region['name']}}</h5>
        @foreach($constituencies as $constituency)
            @if($constituency['regionID'] == $region['id'])
                <a href = {{  route("Constituency.show",  ["constituency"=> $constituency['id']])}}>
                    <img src= {{asset($constituency['seat']['partyImage'])}} class="rounded" width= "50" height= "50">
                </a>
            @endif
        @endforeach
    @endforeach
@endsection

@section('mapLeftTitle','Regions')

@section('mapLeftTable')
 
                <tr>
                <th>Party</th>
                <th></th>
                <th>Represenative</th>
                </tr>
  
@endsection

@section('leftMapOptions')
    <script>
        var leftMapView = [52.5, -2.01];
        var leftMapZoom = 8;
    </script>
@endsection


@section('rightMapOptions')
    <script>
        var rightMapView = [52.5, -4.01];
        var rightMapZoom = 8;
    </script>
@endsection

@section('mapLeft')
    @foreach ($regions as $region)
  
        <script> 
            
            var regionName = {!! json_encode($region['name']) !!};
            var regionID = {!! json_encode($region['id']) !!};
            var string = "var regionCoords = " +{!! json_encode($coordinates[$region['name']]) !!};
            eval(string);
            var regionColour = {!! json_encode([$region['colour']]) !!};
            var regionWinnngParties = [];

        </script>
            @foreach ($region['seats'] as $seat )
            <script> 
               regionWinnngParties.push([{!! json_encode($seat['partyName']) !!},{!! json_encode($seat['partyID']) !!}, {!! json_encode($seat['partyImage']) !!}, {!! json_encode($seat['repName']) !!}, {!! json_encode($seat['repID']) !!}]);
            </script>
            @endforeach
        <script> 
            L.polygon(regionCoords, {color:regionColour, regionName:regionName, regionID:regionID, regionWinnngParties:regionWinnngParties}).addTo(map1).on('click', function(e) {
                document.getElementById("mapLeftTableHeader").innerHTML = this.options.regionName;
                url = '{{ route("Region.show",  ["region"=>":id"]) }}';
                url = url.replace(':id', this.options.regionID);
                document.getElementById("mapLeftTableHeader").innerHTML ="<a href=" + url +">"   + this.options.regionName  + "</a>"
                $("#leftTableBody").empty();
                var table = document.getElementById("leftTableBody");
                for (i = 0; i < this.options.regionWinnngParties.length; i++) { 
                    let row = table.insertRow();
                    let image = row.insertCell(0);
                    image.innerHTML =   "<img src="+ this.options.regionWinnngParties[i][2] + " class=\"rounded\" width= \"50\" height= \"50\">";
                    let party = row.insertCell(1);
                    var url = '{{ route("party.show",  ["party"=>":id"]) }}';
                    url = url.replace(':id', this.options.regionWinnngParties[i][1]);
                    party.innerHTML =  party.innerHTML =  "<a href=" + url +">"   + this.options.regionWinnngParties[i][0] + "</a>";
                    let name = row.insertCell(2);
                    url = '{{ route("Representative.show",  ["representative"=>":id"]) }}';
                    url = url.replace(':id', this.options.regionWinnngParties[i][4]);
                    name.innerHTML = "<a href=" + url +">"   + this.options.regionWinnngParties[i][3] + "</a>";
                }             
            });
        </script>
    @endforeach

@endsection

@section('mapRightTitle','Constituencies')


@section('mapRightTable')
                <tr>
                <th>Party</th>
                <th></th>
                <th>Represenative</th>
                </tr>
@endsection

@section('mapRight')
    @foreach ($constituencies as $constituency)
        <script>   
            var constituencyID = {!! json_encode($constituency['id']) !!};
            var constituencyName = {!! json_encode($constituency['name']) !!};
            var string = "var constituencyCoords = " +{!! json_encode($coordinates[$constituency['name']]) !!};
            eval(string)
            var constituencyColour = {!! json_encode($constituency['colour']) !!};
            var constituencyWinnngParty = [{!! json_encode($constituency['seat']['partyName']) !!}, {!! json_encode($constituency['seat']['partyID']) !!}, 
            {!! json_encode($constituency['seat']['partyImage']) !!}, {!! json_encode($constituency['seat']['repName']) !!}, {!! json_encode($constituency['seat']['repID']) !!}];

            var regionPoly = L.polygon(constituencyCoords, {color:constituencyColour, constituencyName:constituencyName, constituencyID:constituencyID ,constituencyWinnngParty:constituencyWinnngParty}).addTo(map2).on('click', function(e) {
                url = '{{ route("Constituency.show",  ["constituency"=>":id"]) }}';
                url = url.replace(':id', this.options.constituencyID);
                document.getElementById("mapRightTableHeader").innerHTML ="<a href=" + url +">"   + this.options.constituencyName  + "</a>"
                
                $("#rightTableBody").empty();
                
                var table = document.getElementById("rightTableBody");
                let row = table.insertRow();
                
                let image = row.insertCell(0);
                image.innerHTML =   "<img src="+ this.options.constituencyWinnngParty[2] + " class=\"rounded\" width= \"50\" height= \"50\">";
                
                let party = row.insertCell(1);
                url = '{{ route("party.show",  ["party"=>":id"]) }}';
                url = url.replace(':id', this.options.constituencyWinnngParty[1]);
                party.innerHTML =  party.innerHTML =  "<a href=" + url +">"   + this.options.constituencyWinnngParty[0] + "</a>";
                
                let name = row.insertCell(2);
                url = '{{ route("Representative.show",  ["representative"=>":id"]) }}';
                url = url.replace(':id', this.options.constituencyWinnngParty[4]);
                name.innerHTML = "<a href=" + url +">"   + this.options.constituencyWinnngParty[3] + "</a>";
                
            });
            

        </script>
    @endforeach
@endsection
@section('references')
    Election Data was collected from <a href = "https://business.senedd.wales/mgManageElectionResults.aspx">The senedd bussiness pages</a>.
@endsection
@section('partyTable')
    <table id="leftTable" class="table table-borderless table-striped table-earning">
        <thead>          
            <tr>
                <th>Party</th>
                <th></th>
                
                <th>Region</th>
                <th>Constituency</th>
                <th>Seats</th>
                
                <th>Votes</th>
                <th>Votes %</th>
                <th>Seats %</th>
                <th>Seat Vote Dif</th>
            </tr>
         </thead>
         <tbody>   
            @foreach($parties as $party)
                <tr>
                    <td><a href = {{ route('party.show',['party'=>$party['id']])}}>
                    <img src= {{asset( $party['image'])}} class="rounded" width= "50" height= "50"></a></td>

                    <td><a href = {{ route('party.show',['party'=>$party['id']])}}>{{$party['name']}}</a></td>
                    <td>{{$party['seatsRegional']}}</td>
                    <td>{{$party['seatsConstituency']}}</td>

                    <td><script>var seatsWon = {!! json_encode($party['seatsConstituency']) !!}+{!! json_encode($party['seatsRegional']) !!};
                    document.write( seatsWon);</script></td>
                    <td>{{$party['votes']}}</td>
                    <td><script> var votePercetage = ({!! json_encode($party['votes']) !!}/{!! json_encode($totalVotes) !!} * 100).toFixed(2)
                    document.write( votePercetage + '%');</script></td>
                    
                    <td><script> var seatPercetage = (({!! json_encode($party['seatsConstituency']) !!}+{!! json_encode($party['seatsRegional']) !!})/{!! json_encode($totalSeats) !!} * 100).toFixed(2);
                    document.write(seatPercetage + '%');</script></td>
                     <td><script> document.write((seatPercetage - votePercetage).toFixed(2) + '%');
                     </script></td>
                </tr> 
            @endforeach
        </tbody>
    </table>
@endsection

