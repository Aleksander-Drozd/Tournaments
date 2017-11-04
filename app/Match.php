<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model {

    public function playerOne() {
        return $this -> belongsTo(User::class);
    }

    public function playerTwo() {
        return $this -> belongsTo(User::class);
    }
}
