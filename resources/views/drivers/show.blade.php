@extends('layouts.app')
@section('content')


<div class="container">
        <div class="row">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="/drivers">Drivers</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $driverPage->title}}</li>
                </ol>
            </nav>            
        </div>
        <div class="row">
          <div class="col-md-8">

            <h3>{{ $driverPage->title}} <a href="{{ route('drivers.edit', ['id'=> $driverPage->id]) }}" class="pull-right btn btn-sm btn-circle btn-outline-primary">Edit Page</a></h3>
            <p class="lead"><img width="35px" src="/assets/images/nationality/{{ strtolower($driver->nationality) }}.png"> | 
                {{$driver->number}} | <a href="/teams/{{$driver->teamPageId}}">{{ $driver->constructorName }}</a></p>
            <p>
                    <img width="35%" class="img-fluid rounded" style="float:left;padding-right:5px;padding-bottom:5px;" src="{{ $driverPage->image }}">
            
                {!! $driverPage->content !!}</p>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="standings-tab" data-toggle="tab" href="#standings" role="tab" aria-controls="standings" aria-selected="true">Standings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Races</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Qualifying</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="standings" role="tabpanel" aria-labelledby="standings-tab">
                        <table class="table-striped table-bordered mt-4" width="100%">
                                <thead>
                                    <th>Position</th>
                                    <th>Drivers</th>
                                    <th>Nationality</th>
                                    <th>Number</th>
                                    <th>Wins</th>
                                    <th>Points</th>
                                </thead>
                                <tbody>
                                @foreach($driverFinalPoints as $driverFinalPoint)
                                <tr>
                                    <td>{{ $driverFinalPoint->position }}</td>
                                    <td><a href="/drivers/{{ $driverFinalPoint->driverPageId}}">{{ $driverFinalPoint->name }}</a></td>
                                    <td><a href="/teams/{{ $driverFinalPoint->teamPageId }}">{{ $driverFinalPoint->constructorName }}</a></td>
                                    <td>{{ $driverFinalPoint->number }}</td>
                                    <td>{{ $driverFinalPoint->wins }}</td>
                                    <td>{{ $driverFinalPoint->points }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>   
                </div>
                <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <table class="table-striped table-bordered" width="100%">
                        <thead>
                            <th>Race</th>
                            <th>Grid</th>
                            <th>Position</th>
                            <th>Points</th>
                            <th>Laps</th>
                            <th>Time</th>
                            <th>Fastest Lap</th>
                            <th>Rank</th>
                        </thead>
                        <tbody>
                        @foreach($raceResults as $raceResult)
                        <tr>
                            <td><a href="/races/{{ $raceResult->racePageId }}">{{ $raceResult->raceName }}</a></td>
                            <td>{{ $raceResult->grid }}</td>
                            <td>{{ $raceResult->position }}</td>
                            <td>{{ $raceResult->points }}</td>
                            <td>{{ $raceResult->laps }}</td>
                            <td>{{ $raceResult->time }}</td>
                            <td>{{ $raceResult->fastestLap }}</td>
                            <td>{{ $raceResult->rank }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <table class="table-striped table-bordered" width="100%">
                        <thead>
                            <th>Race</th>
                            <th>Position</th>
                            <th>Q1</th>
                            <th>Q2</th>
                            <th>Q3</th>
                        </thead>
                        <tbody>
                        @foreach($qualifyingResults as $qualifyingResult)
                        <tr>
                            <td><a href="/races/{{ $qualifyingResult->racePageId }}">{{ $qualifyingResult->raceName }}</a></td>
                            <td>{{ $qualifyingResult->position }}</td>
                            <td>{{ $qualifyingResult->q1 }}</td>
                            <td>{{ $qualifyingResult->q2 }}</td>
                            <td>{{ $qualifyingResult->q3 }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            


    
          </div>
          <div class="col-md-4 mt-4 pt-2">
                <img class="img-fluid rounded-circle mb-4" src="{{$driverPage->thumbnail}}" width="240px">
                <h5>Photos</h5>
                @if($driverPage->poster1 != '')
                <img onclick="lightbox_open('{{$driverPage->poster1}}')" style="cursor:pointer;" class="img-fluid rounded mb-4" src="{{$driverPage->poster1}}" width="240px">
                @endif
                @if($driverPage->poster2 != '')
                <img onclick="lightbox_open('{{$driverPage->poster2}}')" style="cursor:pointer;" class="img-fluid rounded mb-4" src="{{$driverPage->poster2}}" width="240px">
                @endif
                @if($driverPage->poster3 != '')
                <img onclick="lightbox_open('{{$driverPage->poster3}}')" style="cursor:pointer;" class="img-fluid rounded mb-4" src="{{$driverPage->poster3}}" width="240px">
                @endif
            </div>
        </div>

        <div id="light">
            <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
            <img id="photoViewer" width="100%">
        </div>

        <div id="fade" onClick="lightbox_close();"></div>

        <script>
            
            var photoViewer = document.getElementById("photoViewer");

            window.document.onkeydown = function(e) {
                if (!e) {
                    e = event;
                }
                if (e.keyCode == 27) {
                    lightbox_close();
                }
            }
            
            function lightbox_open(src) {
                window.scrollTo(0, 0);
                document.getElementById('light').style.display = 'block';
                document.getElementById('fade').style.display = 'block';
                photoViewer.src = src;
            }
            
            function lightbox_close() {
                document.getElementById('light').style.display = 'none';
                document.getElementById('fade').style.display = 'none';
            }
        </script>

        <style>
            #fade {
                display: none;
                position: fixed;
                top: 0%;
                left: 0%;
                width: 100%;
                height: 100%;
                background-color: black;
                z-index: 1001;
                -moz-opacity: 0.8;
                opacity: .80;
                filter: alpha(opacity=80);
            }
                
            #light {
                display: none;
                position: absolute;
                top: 12%;
                left: 10%;
                max-width:90%;
                max-height:90%;
                margin-right:10%;
                border: 2px solid #FFF;
                background: #FFF;
                z-index: 1002;
                overflow: visible;
            }
                
            #boxclose {
                float: right;
                cursor: pointer;
                color: #fff;
                border: 1px solid #AEAEAE;
                border-radius: 3px;
                background: #222222;
                font-size: 31px;
                font-weight: bold;
                display: inline-block;
                line-height: 0px;
                padding: 11px 3px;
                position: absolute;
                right: 2px;
                top: 2px;
                z-index: 1002;
                opacity: 0.9;
            }
                
            .boxclose:before {
                content: "×";
            }
                
            #fade:hover ~ #boxclose {
                display:none;
            }
                
        </style>
    </div>
</div>
@endsection