@extends('layouts.app')
@section('content')


<div class="container">
        <div class="row">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="/teams">Teams</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $teamPage->title}}</li>
                </ol>
            </nav>            
        </div>
        <div class="row">
          <div class="col-md-8">

            <h3>{{ $teamPage->title}} <a href="{{ route('teams.edit', ['id'=> $teamPage->id]) }}" class="pull-right btn btn-sm btn-circle btn-outline-primary">Edit Page</a></h3>
            <img class="img-fluid rounded" src="{{ $teamPage->image }}">
            <table class="table-striped table-bordered mt-4" width="100%">
                <thead>
                    <th>Drivers</th>
                    <th>Nationality</th>
                    <th>Number</th>
                    <th>Position</th>
                    <th>Wins</th>
                    <th>Points</th>
                </thead>
                <tbody>
                @foreach($driverFinalPoints as $driverFinalPoint)
                <tr>
                    <td><a href="/drivers/{{$driverFinalPoint->driverPageId}}">{{ $driverFinalPoint->name }}</a></td>
                    <td><!--img width="25px" src="/assets/images/nationality/{{ $driverFinalPoint->nationality }}.png"-->{{ $driverFinalPoint->nationality }}</td>
                    <td>{{ $driverFinalPoint->number }}</td>
                    <td>{{ $driverFinalPoint->position }}</td>
                    <td>{{ $driverFinalPoint->wins }}</td>
                    <td>{{ $driverFinalPoint->points }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>   
            <p>{!! $teamPage->content !!}</p>
    
          </div>
          <div class="col-md-4 mt-4 pt-2">
                <img class="img-fluid rounded mb-4" src="{{$teamPage->thumbnail}}" width="240px">
                <h5>Championship Results</h5>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Teams</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Races</a>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <table class="table-striped table-bordered" width="100%">
                                <thead>
                                    <th>Team</th>
                                    <th>Points</th>
                                </thead>
                                <tbody>
                                @foreach($teamFinalPoints as $teamFinalPoint)
                                <tr>
                                    <td><a href="/teams/{{ $teamFinalPoint->teamPageId }}">{{ $teamFinalPoint->constructorName }}</a></td>
                                    <td>{{ $teamFinalPoint->totalPoints }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>                        
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="table-striped table-bordered" width="100%">
                                <thead>
                                    <th>Grand Prix</th>
                                    <th>Points</th>
                                </thead>
                                <tbody>
                                @foreach($teamPoints as $teamPoint)
                                <tr>
                                    <td><a href="/races/{{ $teamPoint->racePageId }}">{{ $teamPoint->raceName }}</a></td>
                                    <td>{{ $teamPoint->points }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>                    
                        </div>
                      </div>
                </ul>  
            </div>
          </div>
        </div>
</div>
@endsection