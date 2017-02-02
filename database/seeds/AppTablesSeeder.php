<?php

use Illuminate\Database\Seeder;

class AppTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labels = factory(\App\Label::class, 5)->create();
        factory(\App\Seller::class, 2)->create()->each(function($seller) use ($labels){
            factory(\App\Product::class, 3)->create(['seller_id' => $seller->id])->each(function($product) use ($labels){
                factory(\App\Review::class, 10)->create(['product_id' => $product->id]);

                $product->labels()->attach($labels[rand(0,4)]->id);
                $product->labels()->attach($labels[rand(0,4)]->id);
            });
        });
    }
}
