<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFilterRequest;
use App\Http\Resources\ProductCollection;
use App\Models\Product;
use App\Models\Property;
use App\Models\PropertyValue;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(ProductFilterRequest $request): ProductCollection
    {
        $properties = $request->validated('properties') ?? [];

        if (empty($properties)) {
            return new ProductCollection(Product::with('propertyValues.property')
                ->paginate(40));
        }
        $query = Product::query();

            foreach ($properties as $propertyName => $propertyValues) {
                if (!is_array($propertyValues) || empty($propertyValues)) {
                    continue;
                }

                $property = Property::where('name', $propertyName)->first();

                if (!$property) {
                    continue;
                }

                $valueIds = PropertyValue::where('property_id', $property->id)
                    ->whereIn('value', $propertyValues)
                    ->pluck('id')
                    ->toArray();

                if (empty($valueIds)) {
                    continue;
                }

                $productIds = DB::table('product_property_value')
                    ->whereIn('property_value_id', $valueIds)
                    ->pluck('product_id')
                    ->toArray();

                $query->whereIn('id', $productIds);
            }

        $products = $query->with('propertyValues.property')
            ->paginate(40);

        return new ProductCollection($products);
    }
}
