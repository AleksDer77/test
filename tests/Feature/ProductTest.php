<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->getJson('/api/products');

        $response->assertStatus(200)
        ->assertJsonCount(10, 'data');
    }

    public function test_it_filters_products_by_query_parameters(): void
    {
        $this->withoutExceptionHandling();
        $response = $this->getJson(
            '/api/products/?properties[color][]=blue&properties[brand][]=ikea&properties[material][]=metal'
        );

        $response->assertJson(fn(AssertableJson $json) => $json->has('data')
            ->etc()
        )->assertJsonFragment(['name' => 'color', 'value' => 'blue'])
            ->assertJsonFragment(['name' => 'brand', 'value' => 'ikea'])
            ->assertJsonFragment(['name' => 'material', 'value' => 'metal'])
            ->assertStatus(200);
    }
}
