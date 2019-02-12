@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item active"><a href="/search">Search</a></li>
            </ol>
        </nav>            
    </div>
<div class="row">          
    <div class="col-lg-8">
        <h3>Search</h3>
        <form class="form-inline mr-4 mb-4" method="GET" action="/search" width="100%">
            <input name="term" style="width:80%" class="form-control mr-sm-2" type="search" 
                placeholder="Search" value="{{ Request::get('term') }}" aria-label="Search">
            <button class="btn btn-default" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </form>
        <div class="row">
            <table class="table">
                @foreach($searchResults as $searchResult)
                <tr>
                    <td class="middle">
                    <div class="media">
                        <div class="media-left p-3">
                        <a class="img-fluid" title="{{ $searchResult->title }}" href="/{{ $searchResult->route }}/{{ $searchResult->id }}">
                            <img width="240px" src="{{ $searchResult->thumbnail }}" >
                        </a>
                        </div>
                        <div class="media-body p-2">
                        <a href="/{{ $searchResult->route }}/{{ $searchResult->id }}">
                        <h4 class="media-heading">{{ $searchResult->title }}</h4>
                        </a>
                        <p>{{ $searchResult->description }}</p>
                        </div>
                    </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="text-center">
            <nav>
                    {!! $searchResults->appends( Request::query() )->render() !!}
            </nav>
        </div>
    </div>
</div>
@endsection