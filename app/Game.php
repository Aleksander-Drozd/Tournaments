<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model {

    public function tournaments() {
        return $this -> hasMany(Tournament::class);
    }

    public function scoringSystem() {
        return $this -> hasOne(ScoringSystem::class);
    }
}
