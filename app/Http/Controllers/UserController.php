<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Tournament;

class UserController extends Controller {

    public function __construct() {
        $this -> middleware('auth', ['only' => 'me']);
    }

    public function show(User $user) {
        return view('user');
    }

    public function me() {
        $user = Auth::user();
        $activeOrganizedTournaments = $user -> activeOrganizedTournaments() -> get();
        $pastOrganizedTournaments = $user -> pastOrganizedTournaments() -> get();
        $currentlyParticipatingIn = $user -> currentlyParticipatingIn() -> get();
        $this -> determineOpponents($currentlyParticipatingIn, $user);
        $participatedIn = $user -> participatedIn() -> get();

        return view('user.index', compact('user', 'activeOrganizedTournaments',
            'pastOrganizedTournaments', 'currentlyParticipatingIn', 'participatedIn'));
    }

    private function determineOpponents(Collection $tournaments, User $user) {
        foreach ($tournaments as $tournament) {
            foreach ($tournament -> matches as $match) {
                $match -> determineOpponentForUser($user);
            }
        }
    }
}
