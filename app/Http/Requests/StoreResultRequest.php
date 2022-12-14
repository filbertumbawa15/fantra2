<?php

namespace App\Http\Requests;

use App\Rules\AfterNow;
use Illuminate\Foundation\Http\FormRequest;

class StoreResultRequest extends FormRequest
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
            'number' => 'required|digits:6|numeric',
            'out_at' => [
                'required',
                'date_format:m/d/Y H:i'
            ]
        ];
    }
}
