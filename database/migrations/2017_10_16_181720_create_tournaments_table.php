<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentsTable extends Migration {

    public function up() {
        Schema::create('tournaments', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('name');
            $table -> string('game');
            $table -> string('elimination_type');
            $table -> dateTime('start_date');
            $table -> dateTime('end_date');
            $table -> integer('capacity');
            $table -> integer('min_participants');
            $table -> string('location');
            $table -> boolean('online');
            $table -> string('description');
            $table -> text('statute');
            $table -> timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('tournaments');
    }
}
