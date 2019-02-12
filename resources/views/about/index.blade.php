@extends('layouts.app')
@section('content')







<div class="container">
    <div class="row">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active"><a href="/about">About</a></li>
                </ol>
            </nav>            
        </div>
    <div class="row">
        
    <div class="col-lg-8">
        <h3>About</h3>
        <p class="lead">Formula1 World was created using the following third-party tools and plug ins...</p>
        <div class="row mt-3">

            <div class="col-md-4">
                <img class="rounded-circle" src="/assets/images/about/formula1.png" 
                alt="HTML 5" width="140" height="140">
                <h3 class="mt-3">Formula 1</h3>
                <p class="mt-3"><a class="btn btn-outline-success" target="_blank" href="http://www.formula1.com" role="button">View details &raquo;</a></p>
            </div>

            <div class="col-md-4">
                <img class="rounded-circle" src="/assets/images/about/mysql.png" 
                alt="HTML 5" width="140" height="140">
                <h3 class="mt-3">Ergast Database</h3>
                <p class="mt-3"><a class="btn btn-outline-success" target="_blank" href="http://ergast.com/mrd/db" role="button">View details &raquo;</a></p>
            </div>

            <div class="col-md-4">
                <img class="rounded-circle" src="/assets/images/about/laravel.png" 
                alt="HTML 5" width="140" height="140">
                <h3 class="mt-3">Laravel 5.5</h3>
                <p class="mt-3"><a class="btn btn-outline-success" target="_blank" href="https://laravel.com/docs/5.5" role="button">View details &raquo;</a></p>
            </div>
                
            <div class="col-md-4">
                <img class="rounded-circle" src="/assets/images/about/bootstrap.png" 
                alt="HTML 5" width="140" height="140">
                <h3 class="mt-3">Bootstrap 4</h3>
                <p class="mt-3"><a class="btn btn-outline-success" target="_blank" href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" role="button">View details &raquo;</a></p>
            </div>

            <div class="col-md-4">
                <img class="rounded-circle" src="/assets/images/about/html5.png" 
                alt="HTML 5" width="140" height="140">
                <h3 class="mt-3">CKEditor</h3>
                <p class="mt-3"><a class="btn btn-outline-success" target="_blank" href="https://ckeditor.com/" role="button">View details &raquo;</a></p>
            </div>

            <div class="col-md-4">
                <img class="rounded-circle" src="/assets/images/about/jquery.png" 
                alt="HTML 5" width="140" height="140">
                <h3 class="mt-3">jQuery v3.2</h3>
                <p class="mt-3"><a class="btn btn-outline-success" target="_blank" href="https://jquery.com/" role="button">View details &raquo;</a></p>
            </div>

            <div class="col-md-4">
                <img class="rounded-circle" src="/assets/images/about/jquery-ui.png" 
                alt="HTML 5" width="140" height="140">
                <h3 class="mt-3">jQuery UI v1.12</h3>
                <p class="mt-3"><a class="btn btn-outline-success" target="_blank" href="https://jqueryui.com/" role="button">View details &raquo;</a></p>
            </div>

            <div class="col-md-4">
                <img class="rounded-circle" src="/assets/images/about/php.svg" 
                alt="HTML 5" width="140" height="140">
                <h3 class="mt-3">PHP v7</h3>
                <p class="mt-3"><a class="btn btn-outline-success" target="_blank" href="http://php.net/manual/en/intro-whatis.php" role="button">View details &raquo;</a></p>
            </div>

            <div class="col-md-4">
                <img class="rounded-circle" src="/assets/images/about/videojs.jpg" 
                alt="HTML 5" width="140" height="140">
                <h3 class="mt-3">Video JS</h3>
                <p class="mt-3"><a class="btn btn-outline-success" target="_blank" href="https://videojs.com/" role="button">View details &raquo;</a></p>
            </div>   
        </div>


    </div>

    <div class="col-lg-4 mt-4 pt-2">
            <h5>Content Sources</h5>
            <table class="table-striped table-bordered" width="100%">
                <thead>
                    <th>Source</th>
                    <th>Content Type</th>
                    <th>Date</th>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="http://www.bbc.co.uk/sport/formula1" target="_blank">BBC Sports Formula 1</a></td>
                        <td>Copy text</td>
                        <td>Dec 2017</td>
                    </tr>
                    <tr>
                        <td><a href="http://www.formula1.com" target="_blank">Formula 1</a></td>
                        <td>Copy text</td>
                        <td>Dec 2017</td>
                    </tr>
                    <tr>
                        <td><a href="https://en.wikipedia.org/wiki/Formula_One" target="_blank">Wikipedia</a></td>
                        <td>Copy text</td>
                        <td>Dec 2017</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.youtube.com/channel/UCB_qr75-ydFVKSF9Dmo6izg" target="_blank">You Tube</a></td>
                        <td>Videos</td>
                        <td>Dec 2017</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.google.com/images" target="_blank">Google Images</a></td>
                        <td>Copy images</td>
                        <td>Dec 2017</td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>
@endsection