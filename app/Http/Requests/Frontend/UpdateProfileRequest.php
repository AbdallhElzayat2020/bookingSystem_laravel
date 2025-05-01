<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
        return [
            'avatar' => ['nullable', 'image', 'mimes:jpeg,jpg,png', 'max:2000'],
            'banner' => ['nullable', 'image', 'mimes:jpeg,jpg,png', 'max:2000'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $this->user()->id],
            'phone' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string', 'max:255'],
            'about' => ['required', 'string', 'max:1000'],
            'website' => ['nullable', 'url', 'max:1000'],
            'fb_link' => ['nullable', 'url', 'max:1000'],
            'x_link' => ['nullable', 'url', 'max:1000'],
            'in_link' => ['nullable', 'url', 'max:1000'],
            'wa_link' => ['nullable', 'url', 'max:1000'],
            'insta_link' => ['nullable', 'url', 'max:1000'],
        ];
    }
}
