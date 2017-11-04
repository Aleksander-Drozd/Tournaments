<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;

    public function tournaments() {
        return $this -> hasMany(Tournament::class, 'organizer_id');
    }

    public function matches() {
        return $this -> hasMany(Match::class, 'player_one_id');
    }

    public function matches2() {
        return $this -> hasMany(Match::class, 'player_two_id');
    }

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
