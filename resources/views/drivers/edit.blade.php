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
      <div class="col-md-12">

        <h3>{{ $driverPage->title}}</h3>

        <div class="panel panel-default">
                <div class="panel-heading">
                  <strong>Edit Driver</strong>
                </div>
                {!! Form::model($driverPage, ['route' => ['drivers.update', $driverPage->id], 'method' => 'PATCH']) !!}
                @include("drivers.form")
                {!! Form::close() !!}
              </div>

      </div>
    </div>
</div>
@endsection