@extends('layouts.app')
@section('content')


<div class="container">
        <div class="row">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active"><a href="/teams">Teams</a></li>
                    </ol>
                </nav>            
            </div>
        <div class="row">
          
<div class="col-lg-8">
<h3>Teams</h3>
<p class="lead">The 2017 Formula 1 season has 10 teams going head-to-head in the battle for podiums and points...</p>
    <div class="row">
            @foreach($teamPages as $teamPage)

            <div class="col-md-4">
                <img class="rounded-circle mb-2" src="{{$teamPage->thumbnail }}" 
                alt="{{ $teamPage->title }}" width="240" height="240">
                <h3>{{$teamPage->title}}</h3>
                <p>{{ $teamPage->description}}</p>
                <p><a class="btn btn-outline-success" href="/teams/{{ $teamPage->id }}" role="button">View details &raquo;</a></p>
            </div>
            
            @endforeach

        </div>
        </div>
        <div class="col-lg-4 mt-4 pt-2">
                <h5>Championship Results</h5>
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
        </div>
</div>
@endsection