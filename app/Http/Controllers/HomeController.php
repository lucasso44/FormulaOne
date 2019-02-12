<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TeamPage;
use App\DriverPage;
use App\RacePage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamPages = TeamPage::take(3)->get();
        $driverPages = DriverPage::take(3)->get();
        $racePages = RacePage::orderBy('raceId', 'desc')->take(3)->get();
        return view('home', compact('teamPages', 'driverPages', 'racePages'));
    }
}
