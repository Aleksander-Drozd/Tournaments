<?php

namespace App\Http\Controllers;

use App\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller {

    function index() {
        return view('index');
    }

    function show($id) {//for testing purposes, needs to be changed to (Tournament $tournament)
        return view('tournament');
    }
}
