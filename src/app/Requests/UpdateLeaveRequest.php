<?php

namespace Karyam\LeaveManagement\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Karyam\LeaveManagement\app\Models\Leave;

class UpdateLeaveRequest extends FormRequest
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
        $rules = Leave::$rules;

        return $rules;
    }
}
