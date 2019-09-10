<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'thumbnail' => 'nullable|max:255',
            'title' => 'required|max:100',
            'slug' => 'required|max:100',
            'summary' => 'required|max:255',
            'content' => 'required|max:10000',
            'created_at' => 'nullable|max:20',
        ];
    }
}
