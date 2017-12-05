<?php

namespace App\Http\Controllers;

use App\Game;
use App\Http\Requests\DeleteTournament;
use App\Http\Requests\EditTournamentRequest;
use App\Http\Requests\StoreTournament;
use App\Http\Requests\UpdateTournament;
use App\Match;
use App\Tournament;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use function Sodium\add;

class TournamentController extends Controller {

    public function __construct() {
        $this -> middleware('auth', ['except' => ['index', 'show']]);
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

    function start(Tournament $tournament) {
        $participants = $tournament -> participants;
        for ($i = 1; $i < $participants -> count(); $i++) {
            $player = $participants[$i - 1];
            $opponents = $participants -> slice($i);
            $opponents -> each(function ($opponent) use ($player, $tournament){
                $match = new Match();
                $match -> player_one_id = $player -> id;
                $match -> player_two_id = $opponent -> id;
                $match -> tournament_id = $tournament -> id;
                $match -> datetime = Carbon::now();
                $match -> location = 'not specified';
                $match -> save();
            });
        }
        $tournament -> started = 1;
        $tournament -> update();
        $matches = $tournament -> matches;
        return view('singleTournament.index', compact('tournament', 'matches'));
    }
}
