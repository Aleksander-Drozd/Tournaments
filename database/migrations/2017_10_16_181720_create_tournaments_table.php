<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentsTable extends Migration {

    public function up() {
        Schema::create('tournaments', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('name');
            $table -> text('description');
            $table -> text('statute');
            $table -> timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('tournaments');
    }
}
