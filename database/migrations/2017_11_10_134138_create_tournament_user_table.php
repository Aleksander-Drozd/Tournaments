<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentUserTable extends Migration {

    public function up() {
        Schema::create('tournament_user', function (Blueprint $table) {
            $table -> integer('tournament_id');
            $table -> integer('user_id');
        });
    }

    public function down() {
        Schema::dropIfExists('tournament_user');
    }
}
