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
        $tournament = $this -> route("tournament");
        return $tournament && $this -> user() -> can('delete', $tournament);
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
