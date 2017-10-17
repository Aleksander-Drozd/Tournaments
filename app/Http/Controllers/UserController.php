<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller {

    function showMe(User $user) {
        return view('user');
    }

    function show(User $user) {
        return view('user');
    }
}
