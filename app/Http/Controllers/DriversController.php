<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DriverPage;
use App\Raceresult;
use App\Driverfinalpoint;
use App\Qualifyingresult;
class DriversController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $driverPages = DriverPage::orderBy('title', 'asc')->get();
        $driverFinalPoints = Driverfinalpoint::all();

        return view('drivers.index', compact('driverPages', 'driverFinalPoints'));
    }

    public function show($id)
    {
        $driverPage = DriverPage::findOrFail($id);
        $raceResults = Raceresult::where('driverId', $driverPage->driverId)->get();
        $qualifyingResults = Qualifyingresult::where('driverId', $driverPage->driverId)->get();
        $driver = Driverfinalpoint::where('driverId', $driverPage->driverId)->first();
        $driverFinalPoints = Driverfinalpoint::all();

        return view("drivers.show", compact('driverPage','raceResults', 'qualifyingResults', 'driver', 'driverFinalPoints'));
    }

    public function edit($id)
    {
        $driverPage = DriverPage::findOrFail($id);
        return view("drivers.edit", compact('driverPage'));
    }

    public function update($id, Request $request)
    {
      $driverPage = DriverPage::findOrFail($id);
      $data = $request->all();
      $driverPage->update($data);

      $raceResults = Raceresult::where('driverId', $driverPage->driverId)->get();
      $qualifyingResults = Qualifyingresult::where('driverId', $driverPage->driverId)->get();
      $driver = Driverfinalpoint::where('driverId', $driverPage->driverId)->first();
      $driverFinalPoints = Driverfinalpoint::all();

      return view("drivers.show", compact('driverPage','raceResults', 'qualifyingResults', 'driver', 'driverFinalPoints'))->with('message','Driver Updated!');
    }
}
