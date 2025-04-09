<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\PropertyValue;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PropertyValueResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        /** @var PropertyValue $this */
        return [
            'name'  => $this->whenLoaded('property', fn() => $this->property?->name),
            'value' => $this->value,
        ];
    }
}
