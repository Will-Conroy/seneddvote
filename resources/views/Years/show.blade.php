@extends('layouts.doubleMap')

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
         <img src= {{asset($winners[$seat->id]->party->image)}} class="rounded" width= "50" height= "50">
        @endforeach
       
    @endforeach
@endsection

@section('seatsRight')
    <h4>Constituencies</h4>
    <br>
    @foreach ($regions as $region )
        <h5> {{$region->name}}</h5>
        @foreach ($region->constituencies as $constituency )
         <img src= {{asset($winners[$constituency->name]->party->image)}} class="rounded" width= "50" height= "50">
        @endforeach
    @endforeach
@endsection





@section('mapLeftTitle','Regions')

@section('mapLeftTable')
        <div class = "col">
            <h4 id = "mapLeftTableHeader">
                        Region
            </h4>
                <table id="leftTable" class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                            <th>Party</th>
                            <th></th>
                            <th>Represenative</th>
                            </tr>
                        </thead>
                        <tbody id="leftTableBody"></tbody>
                        </table>
@endsection

@section('mapLeft')
    @foreach ($regions as $region)
  
        <script> 
            
            var regionName = {!! json_encode($region->name) !!};
            var regionCoords = {!! json_encode($coordinates[$region->name]) !!};
            var regionColour = {!! json_encode($colours[$region->name]) !!};
            var regionWinnngParties = [];

        </script>
            @foreach ($region->seats as $seat )
            <script> 
               regionWinnngParties.push([{!! json_encode($winners[$seat->id]->party->name) !!},{!! json_encode($winners[$seat->id]->name) !!}, {!! json_encode($winners[$seat->id]->party->image) !!}]);
            </script>
            @endforeach
        <script> 
            L.polygon(regionCoords, {color:regionColour, regionName:regionName, regionWinnngParties:regionWinnngParties}).addTo(map1).on('click', function(e) {
                document.getElementById("mapLeftTableHeader").innerHTML = this.options.regionName;
                $("#leftTableBody").empty();
                var table = document.getElementById("leftTableBody");
                for (i = 0; i < this.options.regionWinnngParties.length; i++) { 
                    let row = table.insertRow();
                    let image = row.insertCell(0);
                    image.innerHTML =   "<img src="+ this.options.regionWinnngParties[i][2] + " class=\"rounded\" width= \"50\" height= \"50\">";
                    let party = row.insertCell(1);
                    party.innerHTML =  this.options.regionWinnngParties[i][0];
                    let name = row.insertCell(2);
                    name.innerHTML =  this.options.regionWinnngParties[i][1];
                }             
            });
        </script>
    @endforeach

@endsection

@section('mapRightTitle','Constituencies')


@section('mapRightTable')


@endsection

@section('mapRight')
    @foreach ($constituencies as $constituency)
        <script>      
            var constituencyName = {!! json_encode($constituency->name) !!};
            var constituencyCoords = {!! json_encode($coordinates[$constituency->name]) !!};
            var constituencyColour = {!! json_encode($colours[$winners[$constituency->name]->name]) !!};
           
            var constituencyWinnngParty = [{!! json_encode($winners[$constituency->name]->party->image) !!}, {!! json_encode($winners[$constituency->name]->party->name) !!}, {!! json_encode($winners[$constituency->name]->name) !!}]

            L.polygon(constituencyCoords, {color:constituencyColour, constituencyName:constituencyName ,constituencyWinnngParty:constituencyWinnngParty}).addTo(map2).on('click', function(e) {
                document.getElementById("mapRightTableHeader").innerHTML = this.options.constituencyName;
                $("#rightTableBody").empty();
                var table = document.getElementById("rightTableBody");
                let row = table.insertRow();
                let image = row.insertCell(0);
                image.innerHTML =   "<img src="+ this.options.constituencyWinnngParty[0] + " class=\"rounded\" width= \"50\" height= \"50\">";
                let party = row.insertCell(1);
                party.innerHTML =  this.options.constituencyWinnngParty[1];
                let name = row.insertCell(2);
                name.innerHTML =  this.options.constituencyWinnngParty[2];
                           
            });

        </script>
    @endforeach
@endsection


@section('references')
    Election Data was collected from <a href = "https://business.senedd.wales/mgManageElectionResults.aspx">The senedd bussiness pages</a>.



@endsection