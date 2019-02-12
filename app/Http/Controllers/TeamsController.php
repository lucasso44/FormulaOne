<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TeamPage;
use App\Constructorpoint;
use App\Constructorfinalpoint;
use App\Driverfinalpoint;

class TeamsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $teamPages = TeamPage::orderBy('title', 'asc')->get();
        $teamFinalPoints = Constructorfinalpoint::all();

        return view('teams.index', compact('teamPages', 'teamFinalPoints'));
    }

    public function show($id)
    {
        $teamPage = TeamPage::findOrFail($id);
        $teamPoints = Constructorpoint::where('constructorId', $teamPage->constructorId)->get();
        $teamFinalPoints = Constructorfinalpoint::all();
        $driverFinalPoints = Driverfinalpoint::where('constructorId', $teamPage->constructorId)->get();

        return view("teams.show", compact('teamPage', 'teamPoints', 'teamFinalPoints', 'driverFinalPoints'));
    }

    public function edit($id)
    {
        $teamPage = TeamPage::findOrFail($id);
        return view("teams.edit", compact('teamPage'));
    }

    public function update($id, Request $request)
    {
      $teamPage = TeamPage::findOrFail($id);
      $data = $request->all();
      $teamPage->update($data);
      $teamPoints = Constructorpoint::where('constructorId', $teamPage->constructorId)->get();
      $teamFinalPoints = Constructorfinalpoint::all();
      $driverFinalPoints = Driverfinalpoint::where('constructorId', $teamPage->constructorId)->get();

      return view("teams.show", compact('teamPage', 'teamPoints', 'teamFinalPoints', 'driverFinalPoints'))->with('message','Team Updated!');
    }
}
