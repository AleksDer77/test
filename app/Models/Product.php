<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property string $name
 * @property string $price
 * @property int $quantity
 * @method whenLoaded(string $string)
 */
class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'quantity',
    ];

    public function propertyValues(): BelongsToMany
    {
        return $this->belongsToMany(PropertyValue::class, 'product_property_value');
    }

    public function scopeFilterByProperties(Builder $query, array $properties): Builder
    {
        if (empty($properties)) {
            return $query;
        }

        $i = 0;

        foreach ($properties as $propertyName => $propertyValues) {
            if (!is_array($propertyValues) || empty($propertyValues)) {
                continue;
            }

            $i++;

            $query->join("product_property_value as ppv{$i}", "products.id", "=", "ppv{$i}.product_id")
                ->join("property_values as pv{$i}", "ppv{$i}.property_value_id", "=", "pv{$i}.id")
                ->join("properties as p{$i}", "pv{$i}.property_id", "=", "p{$i}.id")
                ->where("p{$i}.name", $propertyName)
                ->whereIn("pv{$i}.value", $propertyValues);
        }

        return $query->select('products.*');
    }

}
