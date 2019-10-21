<?php

namespace Tests\Feature;


use App\Genre;
use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GenrePageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function ジャンルページが正しく表示されているかどうか()
    {
        $genre = 'mens';
//        $genre->slug = 'mens';
        $product = factory(Product::class)->create();

        $this->get(route('genre.show', $genre))
            ->assertStatus(200)
//            ->assertSee($genre->name)
            ->assertSee($product->cover_image)
            ->assertSee($product->name)
            ->assertSee($product->price);
    }
}
