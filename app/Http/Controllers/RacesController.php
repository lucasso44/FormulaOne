<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RacePage;
use App\Raceresult;
use App\Racelisting;
use App\Qualifyingresult;
use App\Raceround;

class RacesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $racePages = Racelisting::orderBy('title', 'asc')->get();
        $raceRounds = Raceround::orderBy('round', 'asc')->get();

        return view('races.index', compact('racePages', 'raceRounds'));
    }

    public function show($id)
    {
        $racePage = Racelisting::findOrFail($id);
        $raceRounds = Raceround::orderBy('round', 'asc')->get();
        $raceResults = Raceresult::where('raceId', $racePage->raceId)->get();
        $qualifyingResults = Qualifyingresult::where('raceId', $racePage->raceId)->get();

        return view("races.show", compact('racePage', 'raceRounds', 'raceResults','qualifyingResults'));
    }

    public function edit($id)
    {
        $racePage = RacePage::findOrFail($id);
        return view("races.edit", compact('racePage'));
    }

    public function update($id, Request $request)
    {
      $racePage = RacePage::findOrFail($id);
      $data = $request->all();
      $racePage->update($data);

      $raceRounds = Raceround::orderBy('round', 'asc')->get();
      $raceResults = Raceresult::where('raceId', $racePage->raceId)->get();
      $qualifyingResults = Qualifyingresult::where('raceId', $racePage->raceId)->get();

      return view("races.show", compact('racePage','raceRounds', 'raceResults','qualifyingResults'))->with('message','Driver Updated!');
    }
}
