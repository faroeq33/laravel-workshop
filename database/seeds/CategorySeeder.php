<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 10)->create()
            ->each(function ($category) {
                $category->product()->saveMany(factory(Product::class, 10)->create(['category_id' => $category->id]));
            });
    }
}