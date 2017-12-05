<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller {

    use AuthenticatesUsers;

//    protected $redirectTo = '/home';

    public function __construct() {
        $this -> middleware('guest') -> except('logout');
        Session::put('backUrl', URL::previous());
    }

    public function redirectTo() {
        return Session ::get('backUrl') ? Session ::get('backUrl'): $this -> redirectTo;
    }
}
