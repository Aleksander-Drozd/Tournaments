<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;

    public function isSignedUpTo(Tournament $tournament) {
        return $tournament -> participants -> contains($this);
    }

    public function isTournamentOrganizer(Tournament $tournament) {
        return $this == $tournament -> organizer;
    }

    public function organizedTournaments() {
        return $this -> hasMany(Tournament::class, 'organizer_id');
    }

    public function activeOrganizedTournaments() {
        return $this -> organizedTournaments()
                     -> active()
                     -> orderBy('start_date', 'asc');
    }

    public function pastOrganizedTournaments() {
        return $this -> organizedTournaments()
                     -> past()
                     -> orderBy('start_date', 'asc');
    }

    public function participatesIn() {
        return $this -> belongsToMany(Tournament::class);
    }

    public function currentlyParticipatingIn() {
        return $this -> participatesIn()
                     -> where(function ($query) {
                         Tournament::activeScope($query);
                     })
                     -> with(['matches' => function ($query) {
                         $query -> with(['playerOne', 'playerTwo'])
                                -> where(function($query) {
                                    $query -> where('player_one_id', $this -> id)
                                           -> orWhere('player_two_id', $this -> id);
                                })
                                -> whereNull('player_one_score')
                                -> orderBy('datetime', 'asc');
                     }])
                     -> orderBy('start_date', 'asc');
    }

    public function participatedIn() {
        return $this -> participatesIn()
                     -> past()
                     -> orderBy('start_date', 'asc');
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
