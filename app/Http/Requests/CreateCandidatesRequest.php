<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCandidatesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:candidates',
            'subjet' => 'required',
            'hv' => 'required|file|mimes:docx,doc,pdf|max:20000',
        ];
    }
    public function messages()
    {
        return [
            'hv.mimes' => 'La hoja de vida debe estar en word o en pdf',
            'hv.max' => 'La hoja de vida no debe pesar más de 20m ',
        ];
    }
}
