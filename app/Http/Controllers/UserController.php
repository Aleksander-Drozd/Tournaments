<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Tournament;

class UserController extends Controller {

    function show(User $user) {
        return view('user');
    }

    function me() {
        $tournaments = Tournament::active() -> get();
        $user = Auth::user();
        return view('user.index', compact('user', 'tournaments'));
    }
}
