<?php

namespace App\Http\Requests;

use App\Tournament;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTournament extends FormRequest {

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
            'name' => 'required|alpha_num',
            'start-date' => 'required|date|after:now',
            'end-date' => 'required|date|after_or_equal:start-date',
            'game' => 'required|integer',
            'min-participants' => 'required|integer|min:1',
            'max-participants' => 'required|integer|min:1',
            'elimination-type' => 'required',
            'location' => 'required|alpha_num',
            'description' => 'required|alpha_num',
            'participants-info' => 'required|alpha_num',
            'statute' => 'required|alpha_num',
        ];
    }
}
