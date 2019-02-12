@extends('layouts.app')
@section('content')


<div class="container">
        <div class="row">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="/races">Races</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $racePage->title}}</li>
                </ol>
            </nav>            
        </div>
        <div class="row">
          <div class="col-md-8">
                <h3>{{ $racePage->title}} <a href="{{ route('races.edit', ['id'=> $racePage->id]) }}" class="pull-right btn btn-sm btn-circle btn-outline-primary">Edit Page</a></h3>
                <p class="lead">Round {{ $racePage->round }} | {{ $racePage->circuitName}} | {{ $racePage->dateText }}</p>
                
                <div class="embed-responsive embed-responsive-16by9 mb-2">
                    <video id="video" width="100%" height="100%" autobuffer="autobuffer" autoplay="autoplay" _loop="loop" controls="controls">
                            <source src='/videos/{{ $racePage->video }}' type='video/mp4'>
                    </video>
                </div>
                <script>
                    var video = document.querySelector('video');
                    video.onended = function(){
                        var id = {{ $racePage->id }};
                        id = id == 20 ? 1 : id+1;
                        document.location.href = '/races/' + id;
                    };
                </script>
                
                <p>{{ $racePage->description }}</p>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Race</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Qualifying</a>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <table class="table-striped table-bordered" width="100%">
                                <thead>
                                    <th>Position</th>
                                    <th>Driver</th>
                                    <th>Team</th>
                                    <th>Number</th>
                                    <th>Time</th>
                                </thead>
                                <tbody>
                                @foreach($raceResults as $raceResult)
                                <tr>
                                    <td>{{ $raceResult->position }}</td>
                                    <td><a href="/drivers/{{ $raceResult->driverPageId }}">{{ $raceResult->driverName }}</a></td>
                                    <td><a href="/teams/{{ $raceResult->teamPageId }}">{{ $raceResult->constructorName }}</a></td>
                                    <td>{{ $raceResult->number }}</td>
                                    <td>{{ $raceResult->time }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>            
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="table-striped table-bordered" width="100%">
                                <thead>
                                    <th>Position</th>
                                    <th>Driver</th>
                                    <th>Team</th>
                                    <th>Number</th>
                                    <th>Q1</th>
                                    <th>Q2</th>
                                    <th>Q3</th>
                                </thead>
                                <tbody>
                                @foreach($qualifyingResults as $qualifyingResult)
                                <tr>
                                    <td>{{ $qualifyingResult->position }}</td>
                                    <td><a href="/drivers/{{ $qualifyingResult->driverPageId }}">{{ $qualifyingResult->driverName }}</a></td>
                                    <td><a href="/teams/{{ $qualifyingResult->teamPageId }}">{{ $qualifyingResult->constructorName }}</a></td>
                                    <td>{{ $qualifyingResult->number }}</td>
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
            
            <div class="col-md-4 mt-4 pt-4">
                    <img class="img-fluid rounded mt-4 mb-4" src="{{$racePage->thumbnail}}" width="240px">
                    <h5>Championship Rounds</h5>
                    <table class="table-striped table-bordered" width="100%">
                        <thead>
                            <th>Round</th>
                            <th>Race</th>
                            <th>Date</th>
                        </thead>
                        <tbody>
                        @foreach($raceRounds as $raceRound)
                        <tr>
                            <td>{{ $raceRound->round }}</td>
                            <td><a href="/races/{{ $raceRound->racePageId }}">{{ $raceRound->name }}</a></td>
                            <td>{{ $raceRound->dateText }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
    
            </div>
        </div>
</div>
@endsection