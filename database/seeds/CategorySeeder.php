<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Price;
use App\Product;

class CategorySeeder extends Seeder
{
    /**create
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 3)
            ->create()
            ->each(function ($category) {
                $category->product()->saveMany(
                    factory(Product::class, 10)
                        ->create(['category_id' => $category->id])
                        ->each(function ($product) {
                            $product
                                ->price()
                                ->saveMany(factory(Price::class, 3))
                                ->create(['product_id' => $product->id]);
                        })
                );
            });
    }
}