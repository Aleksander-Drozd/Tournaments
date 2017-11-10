<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model {

    public $opponent;

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
