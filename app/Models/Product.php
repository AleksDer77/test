<?php

namespace App\Models;

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
        'name', 'price', 'quantity'
    ];

    public function propertyValues(): BelongsToMany
    {
        return $this->belongsToMany(PropertyValue::class, 'product_property_value');
    }

}
