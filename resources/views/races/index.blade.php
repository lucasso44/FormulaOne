@extends('layouts.app')
@section('content')


<div class="container">
        <div class="row">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active"><a href="/races">Races</a></li>
                    </ol>
                </nav>            
            </div>
        <div class="row">
          
<div class="col-lg-8">
<h3>Races</h3>
<p class="lead">Highlights from every race of the 2017 Formula 1 season as 10 teams go head-to-head in the battle for podiums and points...</p>
    <div class="row">
            @foreach($racePages as $racePage)

            <div class="col-md-4">
                <img class="rounded mb-2" src="{{$racePage->thumbnail }}" 
                alt="{{ $racePage->title }}" width="240" _height="240">
                <h3>{{$racePage->title}}</h3>
                <p class="lead">{{ $racePage->circuitName}}</p>
                <p>{{ $racePage->description}}</p>
                <p><a class="btn btn-outline-success" href="/races/{{ $racePage->id }}" role="button">Watch Highlights &raquo;</a></p>
            </div>
            
            @endforeach

        </div>
        </div>
        <div class="col-lg-4 mt-4 pt-2">
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