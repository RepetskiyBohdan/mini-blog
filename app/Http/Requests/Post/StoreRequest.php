<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required | string',
            'content' => 'required | string',
            'image' => 'required | file',
            'category_id' => 'required | integer | exists:categories,id',
            'tag_ids' => 'nullable | array',
            'tag_ids.*' => 'nullable | integer | exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The field must be filled',
            'title.string' => 'The data must be in the string type',
            'content.string' => 'The field must be filled',
            'content.string' => 'The data must be in the string type',
            'image.required' => 'The field must be filled',
            'image.file' => 'You need to select a file',
            'category_id.required' => 'The field must be filled',
            'category_id.integer' => 'Category ID must be a number',
            'category_id.exists' => 'The Category ID must be in the Database',
            'tag_ids.array' => 'It is necessary to send an array of data',
        ];
    }
}
