<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCategoryUpdateRequest extends FormRequest
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
            // 'localization[ru][title]' => 'required|min:4|max:200',
            // 'localization[ru][slug]' => 'max:200',
            // 'localization[ru][description]' => 'min:3|string|max:500',
            // 'localization[ru][parent_id]' => 'integer',
        ];

    }


    public function messages()
    {
        return [
            // 'localization[ru][title].min' => 'Минимальное имя 4 символа',
            // 'localization[ru][description].min' => 'Минимальная длинна описания 5 символов',
            // 'localization[ru][description].string' => 'Описание должно быть текстом',
        ];
    }
}
