<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed playerTwo
 * @property mixed playerOne
 */
class Match extends Model {

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

    public function determineOpponentForUser(User $user) {
        $this -> opponent = $user -> is($this -> playerOne)
                                ? $this -> playerTwo
                                : $this -> playerOne;
    }
}
