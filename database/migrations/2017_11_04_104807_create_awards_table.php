<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwardsTable extends Migration {

    public function up() {
        Schema ::create('awards', function (Blueprint $table) {
            $table -> increments('id');
            $table -> integer('place');
            $table -> decimal('price', 10, 2);
            $table -> integer('tournament_id');
        });
    }

    public function down() {
        Schema ::dropIfExists('awards');
    }
}
