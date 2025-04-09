<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFilterRequest;
use App\Http\Resources\ProductCollection;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(ProductFilterRequest $request): ProductCollection
    {
        $properties = $request->validated('properties') ?? [];

        $query = Product::filterByProperties($properties);

        $products = $query->with('propertyValues.property')->paginate(40);

        return new ProductCollection($products);
    }
}
