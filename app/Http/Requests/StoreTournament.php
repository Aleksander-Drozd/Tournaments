<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTournament extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required',
            'start-date' => 'required|date|after_or_equal:now',
            'end-date' => 'required|date|after_or_equal:start-date',
            'game' => 'required|integer',
            'min-participants' => 'required|integer|min:1',
            'max-participants' => 'required|integer|min:1',
            'elimination-type' => 'required',
            'location' => 'required',
            'description' => 'required',
            'participants-info' => 'required',
            'statute' => 'required',
            'awards' => 'required',
        ];
    }
}
