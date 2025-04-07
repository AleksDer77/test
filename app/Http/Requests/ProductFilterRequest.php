<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFilterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'properties' => ['sometimes', 'array'],
            'properties.*' => ['sometimes', 'array'],
            'properties.*.*' => ['string'],

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
