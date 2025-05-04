<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookStoreRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'book_title' => ['required', 'string', 'max:255'],
            'book_author' => ['required', 'string', 'max:50'],
            'book_description' => ['required', 'string'],
            'book_cover' => ['required', 'image'],
            'book_publish_date' => ['required', 'date'],
            'book_isbn' => ['required', 'integer']
        ];
    }
}
