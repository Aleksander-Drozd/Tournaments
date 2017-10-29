<?php

namespace App\Http\Controllers;

use App\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller {

    function index() {
        $activeTournaments = Tournament::active() -> get();
        $futureTournaments = Tournament::future() -> get();
        return view('tournaments.index', compact('activeTournaments', 'futureTournaments'));
    }

    function show($id) {//for testing purposes, needs to be changed to (Tournament $tournament)
        return view('tournament');
    }
}
