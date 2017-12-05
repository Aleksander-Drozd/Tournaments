<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentsTable extends Migration {

    public function up() {
        Schema::create('tournaments', function (Blueprint $table) {
            $table -> increments('id');
            $table -> integer('organizer_id');
            $table -> string('name');
            $table -> integer('game_id');
            $table -> string('elimination_type');
            $table -> dateTime('start_date');
            $table -> dateTime('end_date');
            $table -> tinyInteger('started') ->default(0);
            $table -> integer('max_participants');
            $table -> integer('min_participants');
            $table -> string('location');
            $table -> boolean('online');
            $table -> text('description');
            $table -> text('participants_info');
            $table -> text('statute');
            $table -> timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('tournaments');
    }
}
