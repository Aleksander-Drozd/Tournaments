<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller {

    function show(User $user) {
        return view('user');
    }

    function me() {
        $user = Auth::user();
        return view('user.index', compact('user'));
    }
}
