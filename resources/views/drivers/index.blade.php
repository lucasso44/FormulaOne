@extends('layouts.app')
@section('content')


<div class="container">
        <div class="row">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active"><a href="/drivers">Drivers</a></li>
                    </ol>
                </nav>            
            </div>
        <div class="row">
          
<div class="col-lg-8">
<h3>Drivers</h3>
<p class="lead">The 2017 Formula 1 season has 20 drivers going head-to-head in the battle for podiums and points...</p>
    <div class="row">
            @foreach($driverPages as $driverPage)

            <div class="col-md-4">
                <img class="rounded-circle mb-2" src="{{$driverPage->image }}" 
                alt="{{ $driverPage->title }}" width="140" height="140">
                <h3>{{$driverPage->title}}</h3>
                <p>{{ $driverPage->description}}</p>
                <p><a class="btn btn-outline-success" href="/drivers/{{ $driverPage->id }}" role="button">View details &raquo;</a></p>
            </div>
            
            @endforeach

        </div>
        </div>
        <div class="col-lg-4  mt-4 pt-2">
                <h5>Championship Results</h5>
                <table class="table-striped table-bordered mt-4" width="100%">
                        <thead>
                            <th>Position</th>
                            <th>Drivers</th>
                            <th>Points</th>
                        </thead>
                        <tbody>
                        @foreach($driverFinalPoints as $driverFinalPoint)
                        <tr>
                            <td>{{ $driverFinalPoint->position }}</td>
                            <td><a href="/drivers/{{ $driverFinalPoint->driverPageId}}">{{ $driverFinalPoint->name }}</a></td>
                            <td>{{ $driverFinalPoint->points }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table> 
        </div>
        </div>
</div>
@endsection