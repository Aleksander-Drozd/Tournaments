<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model {

    public $timestamps = false;
    protected $fillable = ['place', 'prize', 'tournament_id'];
}
