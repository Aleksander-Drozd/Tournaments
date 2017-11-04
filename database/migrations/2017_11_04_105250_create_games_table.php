<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration {

    public function up() {
        Schema::create('games', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('name');
            $table -> integer('tournament_id');
        });
    }

    public function down() {
        Schema::dropIfExists('games');
    }
}
