<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Crypt;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Authorization logic, adjust as needed
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $categoryId = $this->route('uuid') ? Crypt::decrypt($this->route('uuid')) : null;
        
        return [
            'category_name_en' => [
                'required',
                'string',
                'min:3',
                'max:255',
                Rule::unique('categories', 'en_name')
                    ->ignore($categoryId, 'uuid'),
            ],
            'category_name_cn' => [
                'nullable',
                'string',
                'min:3',
                'max:255',
                Rule::unique('categories', 'cn_name')
                    ->ignore($categoryId, 'uuid'),
            ],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5120', // 5MB max
        ];
    }

    /**
     * Get custom validation messages.
     */
    public function messages(): array
    {
        return [
            'category_name_en.required' => 'The English category name is required.',
            'category_name_en.string' => 'The English category name must be a string.',
            'category_name_en.min' => 'The English category name must be at least 3 characters.',
            'category_name_en.max' => 'The English category name may not be greater than 255 characters.',
            'category_name_en.unique' => 'The English category name must be unique.',

            'category_name_cn.string' => 'The Chinese category name must be a string.',
            'category_name_cn.min' => 'The Chinese category name must be at least 3 characters.',
            'category_name_cn.max' => 'The Chinese category name may not be greater than 255 characters.',
            'category_name_cn.unique' => 'The Chinese category name must be unique.',

            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be of type: jpeg, png, jpg, gif, svg, webp.',
            'image.max' => 'The image size must not exceed 5MB.',
        ];
    }
}
