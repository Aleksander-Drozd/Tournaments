<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwardsTable extends Migration {

    public function up() {
        Schema ::create('awards', function (Blueprint $table) {
            $table -> increments('id');
            $table -> integer('place');
            $table -> string('prize');
            $table -> integer('tournament_id');
            $table -> foreign('tournament_id') -> references('id') -> on('tournaments') -> onDelete('cascade');
        });
    }

    public function down() {
        Schema ::dropIfExists('awards');
    }
}
