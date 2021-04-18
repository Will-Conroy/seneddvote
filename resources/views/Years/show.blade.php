@extends('layouts.sideBySideMaps')

@section('header')
    <h1>{{$year->name}}</h1>
    <p>Over view of {{$year->name}} results</p>
@endsection


@section('seatsLeft')
    <h4>Regions</h4>
    <br>
    @foreach ($regions as $region )
        <h5> {{$region->name}}</h5>
        @foreach ($region->seats as $seat )
        <a href = {{  route("region.show",  ["region"=> $region->id])}}>
            <img src= {{asset($winners[$seat->id]->party->image)}} class="rounded" width= "50" height= "50">
        </a>
        @endforeach
    @endforeach
@endsection

@section('seatsRight')
    <h4>Constituencies</h4>
    <br>
    @foreach ($regions as $region )
        <h5> {{$region->name}}</h5>
        @foreach ($region->constituencies as $constituency )
         <a href = {{  route("constituency.show",  ["constituency"=> $constituency->id])}}>
         <img src= {{asset($winners[$constituency->name]->party->image)}} class="rounded" width= "50" height= "50" title= {{$constituency->name}}>
         </a>
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
            
            var regionName = {!! json_encode($region->name) !!};
            var regionID = {!! json_encode($region->id) !!};
            var regionCoords = {!! json_encode($coordinates[$region->name]) !!};
            var regionColour = {!! json_encode($colours[$region->name]) !!};
            var regionWinnngParties = [];

        </script>
            @foreach ($region->seats as $seat )
            <script> 
               regionWinnngParties.push([{!! json_encode($winners[$seat->id]->party->name) !!},{!! json_encode($winners[$seat->id]->party->id) !!}, {!! json_encode($winners[$seat->id]->party->image) !!}, {!! json_encode($winners[$seat->id]->name) !!}, {!! json_encode($winners[$seat->id]->id) !!}]);
            </script>
            @endforeach
        <script> 
            L.polygon(regionCoords, {color:regionColour, regionName:regionName, regionID:regionID, regionWinnngParties:regionWinnngParties}).addTo(map1).on('click', function(e) {
                document.getElementById("mapLeftTableHeader").innerHTML = this.options.regionName;
                url = '{{ route("region.show",  ["region"=>":id"]) }}';
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
                    url = '{{ route("representative.show",  ["representative"=>":id"]) }}';
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
            var constituencyID = {!! json_encode($constituency->id) !!};
            var constituencyName = {!! json_encode($constituency->name) !!};
            var constituencyCoords = {!! json_encode($coordinates[$constituency->name]) !!};
            var constituencyColour = {!! json_encode($colours[$winners[$constituency->name]->name]) !!};
            var constituencyWinnngParty = [{!! json_encode($winners[$constituency->name]->party->name) !!}, {!! json_encode($winners[$constituency->name]->party->id) !!}, {!! json_encode($winners[$constituency->name]->party->image) !!}, {!! json_encode($winners[$constituency->name]->name) !!}, {!! json_encode($winners[$constituency->name]->id) !!}];

            L.polygon(constituencyCoords, {color:constituencyColour, constituencyName:constituencyName, constituencyID:constituencyID ,constituencyWinnngParty:constituencyWinnngParty}).addTo(map2).on('click', function(e) {
                url = '{{ route("constituency.show",  ["constituency"=>":id"]) }}';
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
                url = '{{ route("representative.show",  ["representative"=>":id"]) }}';
                url = url.replace(':id', this.options.constituencyWinnngParty[4]);
                name.innerHTML = "<a href=" + url +">"   + this.options.constituencyWinnngParty[3] + "</a>";
                
            });

        </script>
    @endforeach
@endsection


@section('references')
    Election Data was collected from <a href = "https://business.senedd.wales/mgManageElectionResults.aspx">The senedd bussiness pages</a>.



@endsection