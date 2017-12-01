<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignOutRequest;
use App\Http\Requests\SignUpRequest;
use App\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignUpController extends Controller {

    public function __construct() {
        $this -> middleware('auth');
    }

    function create(Tournament $tournament, SignUpRequest $request) {
        $tournament -> participants() -> attach(Auth::user() -> id);
        return redirect('/tournaments/'.$tournament -> id);
    }

    function destroy(Tournament $tournament, SignOutRequest $request) {
        $tournament -> participants() -> detach(Auth::user() -> id);
        return redirect('/tournaments/'.$tournament -> id);
    }
}
