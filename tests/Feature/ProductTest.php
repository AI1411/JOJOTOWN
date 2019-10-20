<?php

namespace Tests\Feature;

use App\Product;
use App\Store;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function 製品ページで適切な表示がされているかどうか()
    {
        $store = factory(Store::class)->create();
        $product = factory(Product::class)->create();

        $this->get(route('store.show', $store->slug))
            ->assertStatus(200)
            ->assertSee($store->name)
            ->assertSee($product->cover_image)
            ->assertSee($product->name)
            ->assertSee($product->proce);
    }
}
