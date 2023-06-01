<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:50',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable',
            'description' => 'nullable',
            'series'=>'nullable',
            'sale_date'=>'nullable|date',
            'type'=>'nullable'
        ];
    }
}
