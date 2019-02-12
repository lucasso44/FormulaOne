@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item active"><a href="/teams">Teams</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $teamPage->title}}</li>
            </ol>
        </nav>            
    </div>
        <div class="row">
          <div class="col-md-12">

            <h3>{{ $teamPage->title}}</h3>

            <div class="panel panel-default">
                    <div class="panel-heading">
                      <strong>Edit Team</strong>
                    </div>
                    {!! Form::model($teamPage, ['route' => ['teams.update', $teamPage->id], 'method' => 'PATCH']) !!}
                    @include("teams.form")
                    {!! Form::close() !!}
                  </div>

          </div>
        </div>
</div>
@endsection