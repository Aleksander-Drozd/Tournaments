<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model {

    protected $fillable = [
        'organizer_id', 'name', 'game_id', 'elimination_type',
        'start_date', 'end_date', 'started', 'max_participants', 'min_participants',
        'location', 'online', 'description', 'participants_info',
        'statute'
    ];

    public function isActive() {
        return Carbon::now() -> toDateString() > $this -> start_date
            and Carbon::now() -> toDateString() < $this -> end_date;
    }

    public function isFuture() {
        return Carbon::now() < $this -> start_date;
    }

    public function participants() {
        return $this -> belongsToMany(User::class);
    }

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

    protected function activeScope($query) {
        $query -> where('start_date', '<=', Carbon::now() -> toDateTimeString())
               -> where('end_date', '>=', Carbon::now() -> toDateTimeString());
    }

    public function scopeFuture() {
        return $this -> where('start_date', '>', Carbon ::now() -> toDateTimeString())
            -> orderBy('start_date', 'asc');
    }

    public function scopePast() {
        return $this -> where('end_date', '<', Carbon::now() -> toDateTimeString());
    }

    public function userCanModify($user) {
        return $this -> organizer_id == $user -> id;
    }
}
