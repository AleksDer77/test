<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property int $property_id
 * @property string $value
 * @method whenLoaded(string $string)
 */
class PropertyValue extends Model
{
    /** @use HasFactory<\Database\Factories\PropertyValueFactory> */
    use HasFactory;

    protected $fillable = [
        'property_id', 'value',
    ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_property_value');
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }
}
