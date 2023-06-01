<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            
            // save the fileds
            'title'=>'required|min:5|max:70',
            'thumb'=>'nullable|max:255',
            'price'=>'required',
            'description'=>'nullable',
            'series'=>'nullable',
            'sale_date'=>'nullable|date',
            'type'=>'nullable'
            
        ];
    }
}
