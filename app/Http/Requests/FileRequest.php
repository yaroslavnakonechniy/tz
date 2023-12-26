<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileRequest extends FormRequest
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
            'description' => 'max:500',
            'path' => 'max:50000|image|
            mimes:xls,xlsx,doc,docx,jpg,jpeg,png,gif,tiff,psd,pdf,eps,ai,indd,raw'
        ];
    }
}
