<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed playerTwo
 * @property mixed playerOne
 */
class Match extends Model {

    public $timestamps = false;
    public $opponent;

    public function scopeSortedByDate($query) {
        return $query -> orderBy('datetime', 'asc');
    }

    public function playerOne() {
        return $this -> belongsTo(User::class);
    }

    public function playerTwo() {
        return $this -> belongsTo(User::class);
    }

    public function scoreOrNull($score) {
        return is_null($score) ? '-' : $score;
    }

    public function opponent($user) {
        return $user -> is($this -> playerOne) ? $this -> playerTwo : $this -> playerOne;
    }

    public function determineOpponentForUser(User $user) {
        $this -> opponent = $user -> is($this -> playerOne)
                                ? $this -> playerTwo
                                : $this -> playerOne;
    }
}
