<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddScoreRequest;
use App\Match;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class MatchController extends Controller {

    public function addScore(Match $match, AddScoreRequest $request) {
        $issuer = Auth::user();
        if ($match -> playerOne == $issuer) {
            $match -> player_one_score = request('you');
            $match -> player_two_score = request('opponent');
        } else {
            $match -> player_one_score = request('opponent');
            $match -> player_two_score = request('you');
        }
        $match -> update();

        return Redirect::to('/tournaments/' . $match -> tournament_id);
    }
}
