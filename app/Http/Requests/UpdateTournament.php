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
        $tournament = $this -> route('tournament');
        return $tournament && $this -> user() -> can('update', $tournament);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required',
            'start-date' => 'required|date|after:now',
            'end-date' => 'required|date|after_or_equal:start-date',
            'game' => 'required|integer',
            'min-participants' => 'required|integer|min:1',
            'max-participants' => 'required|integer|min:1',
            'elimination-type' => 'required',
            'location' => 'required',
            'description' => 'required',
            'participants-info' => 'required',
            'statute' => 'required',
        ];
    }
}
