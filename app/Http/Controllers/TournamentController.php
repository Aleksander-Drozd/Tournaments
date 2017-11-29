<?php

namespace App\Http\Controllers;

use App\Game;
use App\Http\Requests\DeleteTournament;
use App\Http\Requests\EditTournamentRequest;
use App\Http\Requests\StoreTournament;
use App\Http\Requests\UpdateTournament;
use App\Tournament;
use Illuminate\Support\Facades\Redirect;

class TournamentController extends Controller {

    public function __construct() {
        $this -> middleware('auth', ['except' => 'index', 'show']);
    }

    function index() {
        $activeTournaments = Tournament::active() -> get();
        $futureTournaments = Tournament::future() -> get();
        return view('tournaments.index', compact('activeTournaments', 'futureTournaments'));
    }

    function show(Tournament $tournament) {
        return view('singleTournament.index', compact('tournament'));
    }

    function create() {
        $games = Game::all();
        return view('tournaments.create', compact('games'));
    }

    function store(StoreTournament $request) {
        $tournament = Tournament::create([
            'organizer_id' => $request -> user() -> id,
            'name' => request('name'),
            'start_date' => request('start-date') . ' ' . request('start-time'),
            'end_date' => request('end-date') . ' ' . request('end-time'),
            'game_id' => request('game'),
            'elimination_type' => request('elimination-type'),
            'min_participants' => request('min-participants'),
            'max_participants' => request('max-participants'),
            'location' => request('location'),
            'online' => request() -> input('online', 0),
            'description' => request('description'),
            'participants_info' => request('participants-info'),
            'statute' => request('statute'),
        ]);

        return redirect('/tournaments/' . $tournament -> id);
    }

    function edit(Tournament $tournament, EditTournamentRequest $request) {
        $games = Game::all();
        return view('tournaments.update', compact('tournament', 'games'));
    }

    function update(Tournament $tournament, UpdateTournament $request) {
        $tournament -> update([
            'name' => request('name'),
            'start_date' => request('start-date') . ' ' . request('start-time'),
            'end_date' => request('end-date') . ' ' . request('end-time'),
            'game_id' => request('game'),
            'elimination_type' => request('elimination-type'),
            'min_participants' => request('min-participants'),
            'max_participants' => request('max-participants'),
            'location' => request('location'),
            'online' => request() -> input('online', 0),
            'description' => request('description'),
            'participants_info' => request('participants-info'),
            'statute' => request('statute'),
        ]);

        return redirect('/tournaments/' . $tournament -> id);
    }

    function destroy(DeleteTournament $request, Tournament $tournament) {
        $tournament -> delete();
        return Redirect::to('/home');
    }
}
