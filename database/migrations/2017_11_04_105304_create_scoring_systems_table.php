<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoringSystemsTable extends Migration {

    public function up() {
        Schema::create('scoring_systems', function (Blueprint $table) {
            $table -> increments('id');
            $table -> integer('game_id');
            $table -> integer('win');
            $table -> integer('lose');
            $table -> integer('draw');
        });
    }

    public function down() {
        Schema::dropIfExists('scoring_systems');
    }
}
