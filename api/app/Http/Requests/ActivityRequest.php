<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityRequest extends FormRequest
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
        if ($this->method() === 'PATCH') {
            $rules['activity.is_finished'] = "required|boolean";
        } else {
            $rules = [
                'activity' => 'required',
                'activity.name' => 'required|string|max:255',
                'activity.start_date' => 'required',
                'activity.finish_date' => 'required',
            ];
        }

        return $rules;
    }
}
