<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration {

    public function up() {
        Schema ::create('matches', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('location');
            $table -> dateTime('datetime');
            $table -> integer('tournament_id');
            $table -> integer('player_one_id');
            $table -> integer('player_two_id');
            $table -> integer('player_one_score') -> nullable();
            $table -> integer('player_two_score') -> nullable();
        });
    }

    public function down() {
        Schema::dropIfExists('matches');
    }
}
