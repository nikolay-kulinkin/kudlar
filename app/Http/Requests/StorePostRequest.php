<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(Request $request): bool
    {
        return $request->title != 'test';
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'title'=>['required','max:255'],
         'slug'=>['required','max:255','unique:posts'],
         'content'=>['required'],
         'category_id'=>['required','exists:categories,id']
        ];
        
    }

    public function messages()
    {
        return[
            'required'=>':attribute required!'
        ];

        
    }
}
