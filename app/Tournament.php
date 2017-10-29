<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model {

    public function scopeActive() {
        return $this -> where('start_date', '<=', Carbon::now() -> toDateTimeString())
                     -> where('end_date', '>=', Carbon::now() -> toDateTimeString())
                     -> orderBy('start_date', 'asc');
    }

    public function scopeFuture() {
        return $this -> where('start_date', '>', Carbon ::now() -> toDateTimeString())
            -> orderBy('start_date', 'asc');
    }
}
