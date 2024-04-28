<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $userId = auth()->id();
        return [
            'name' => 'required|string|max:255',
            'email' => 'string|email|max:255|unique:users,email,' . $userId,
            'password' => 'sometimes|string|min:6',
            'link',
            'partner_name',
            'title_uz',
            'title_ru',
            'title_en',
            'description_uz',
            'description_ru',
            'description_en',
            'short_content_uz',
            'short_content_ru',
            'short_content_en',
            'branches_uz',
            'branches_ru',
            'branches_en',
            'photo',
        ];
    }
}
