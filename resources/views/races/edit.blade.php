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
          <div class="col-md-12">

            <h3>{{ $racePage->title}}</h3>

            <div class="panel panel-default">
                    <div class="panel-heading">
                      <strong>Edit Race</strong>
                    </div>
                    {!! Form::model($racePage, ['route' => ['races.update', $racePage->id], 'method' => 'PATCH']) !!}
                    @include("races.form")
                    {!! Form::close() !!}
                  </div>

          </div>
        </div>
</div>
@endsection