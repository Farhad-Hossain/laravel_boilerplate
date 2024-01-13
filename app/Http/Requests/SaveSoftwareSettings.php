<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest as LaravelFormRequest;

class SaveSoftwareSettings extends FormRequest
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
        if ($this->method() == 'POST' ) {
            $today = now()->format('Y-m-d');
            return [
                'org_name' => ['required', 'min:6'],
                'email' => ['required','email'],
                'established_date' => ['required','date', 'before_or_equal:'.$today],
            ];
        } else {
            return [];
        }
        

    }

    public function attributes()
    {
        return [
            'org_name' => 'Organization Name'
        ];
    }
}
