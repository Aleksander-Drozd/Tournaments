<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model {

    public function game() {
        return $this -> belongsTo(Game::class);
    }

    public function awards() {
        return $this -> hasMany(Award::class);
    }

    public function matches() {
        return $this -> hasMany(Match::class);
    }

    public function organizer() {
        return $this -> belongsTo(User::class);
    }

    public function attendees() {
        return $this -> belongsToMany(User::class);
    }

    public function scoringSystem() {
        return $this -> hasOne(ScoringSystem::class);
    }

    public function scopeActive() {
        return $this -> where('start_date', '<=', Carbon::now() -> toDateTimeString())
                     -> where('end_date', '>=', Carbon::now() -> toDateTimeString())
                     -> orderBy('start_date', 'asc');
    }

    public function scopeFuture() {
        return $this -> where('start_date', '>', Carbon ::now() -> toDateTimeString())
            -> orderBy('start_date', 'asc');
    }
}
