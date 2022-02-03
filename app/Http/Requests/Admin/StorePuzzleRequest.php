<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StorePuzzleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth('admin')->user()->id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'level'=>'required|numeric',
            'description'=>'required',
            'question'=>'required',
            'solution'=>'required',
            'option.*'=>'required',
            'correct_answer'=>'required|numeric'
        ];
    }

      protected function failedValidation(Validator $validator)
    {
        $msg='';
        foreach($validator->errors()->all() as $error)
        {
            $msg .= $error."\n";
        }
        $result = ["status"=>0,"response"=>"validation_error","message"=>$msg];

        throw new HttpResponseException(response()->json($result, 200));
    }
}
