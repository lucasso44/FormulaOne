@extends('layouts.app')
@section('content')


  

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php $dataSlideTo = 0 ?>
        @foreach($racePages as $racePage)
        <li data-target="#myCarousel" data-slide-to="{{ $dataSlideTo }}" class="{{ $dataSlideTo === 0 ? 'active' : ''}}"></li>
        <?php $dataSlideTo++; ?>
        @endforeach
      </ol>
      <div class="carousel-inner">
        <?php $dataSlideTo = 0 ?>
        @foreach($racePages as $racePage)
        <div class="carousel-item {{ $dataSlideTo === 0 ? 'active' : ''}}">
          <img class="first-slide" src="{{ $racePage->poster1 }}" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>{{ $racePage->title}}</h1>
              <p>{{ $racePage->description}}</p>
              <p><a class="btn btn-lg btn-success" href="/races/{{ $racePage->id }}" role="button">Watch Highlights</a></p>
            </div>
          </div>
        </div>
        <?php $dataSlideTo++; ?>
        @endforeach
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">

        @foreach($driverPages as $driverPage)
        <div class="col-lg-4">
          <img class="rounded-circle" src="{{ $driverPage->image }}" alt="{{ $driverPage->title }}" width="140" height="140">
          <h2>{{ $driverPage->title}}</h2>
          <p>{{ $driverPage->description }}</p>
          <p><a class="btn btn-outline-success" href="/drivers/{{ $driverPage->id }}" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        @endforeach

      </div><!-- /.row -->
 

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      @foreach($teamPages as $teamPage)
        <div class="row">
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="{{ $teamPage->image}}" alt="{{ $teamPage->title }}">
              </div>
          <div class="col-md-7">
            <h2 class="heading">{{ $teamPage->title}}</h2>
            <p class="lead">{{ $teamPage->description}}</p>
            <a class="btn btn-outline-success" href="/teams/{{$teamPage->id}}">View Team</a>
          </div>

        </div>

        <hr class="featurette-divider">
      @endforeach

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->



@endsection