<?php

namespace App\Http\Requests;

use App\Tournament;
use Illuminate\Foundation\Http\FormRequest;

class DeleteTournament extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        $tournament = Tournament::find($this -> input("id"));
        return $tournament && $this -> user() -> can('update', $tournament);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            //
        ];
    }
}
