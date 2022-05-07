<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ShippingType;
use App\Models\Stock;
use App\Models\Variation;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categoryData = [
            ['title' =>'Brands', 'slug'=> 'brands', 'parent_id' => null, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['title' =>'Converse', 'slug'=> 'converse', 'parent_id' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
        ];

        Category::insert($categoryData);


        $productData = [
            ['title' =>'Converse Carharrt', 'slug'=> 'converse-carharrt', 'description' => 'insert product description here', 'price' => 12000, 'live_at' => Carbon::now()->toDateTimeString(), 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['title' =>'Converse Comme des Garcons', 'slug'=> 'converse-cdg', 'description' => 'insert product description here', 'price' => 12500, 'live_at' => Carbon::now()->toDateTimeString(), 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['title' =>'Converse Chuck 70s', 'slug'=> 'converse-chuck-70s', 'description' => 'insert product description here', 'price' => 12500, 'live_at' => Carbon::now()->toDateTimeString(), 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['title' =>'Converse Chuck 70s Low', 'slug'=> 'converse-chuck-70s-low', 'description' => 'insert product description here', 'price' => 20000, 'live_at' => Carbon::now()->toDateTimeString(), 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['title' =>'Converse Chuck Taylor', 'slug'=> 'converse-chuck-taylor', 'description' => 'insert product description here', 'price' => 9000, 'live_at' => Carbon::now()->toDateTimeString(), 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['title' =>'Converse Pink', 'slug'=> 'converse-pink', 'description' => 'insert product description here', 'price' => 11000, 'live_at' => Carbon::now()->toDateTimeString(), 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['title' =>'Converse Jack Purcell', 'slug'=> 'converse-jack-purcell', 'description' => 'insert product description here', 'price' => 6000, 'live_at' => Carbon::now()->toDateTimeString(), 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['title' =>'Converse One Star', 'slug'=> 'converse-one-star', 'description' => 'insert product description here', 'price' => 25000, 'live_at' => Carbon::now()->toDateTimeString(), 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['title' =>'Converse Run Star Hike', 'slug'=> 'converse-run-star-hike', 'description' => 'insert product description here', 'price' => 9000, 'live_at' => Carbon::now()->toDateTimeString(), 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
        ];

        Product::insert($productData);


        $categoryProductPivotData = [
            ['category_id' => 2, 'product_id' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['category_id' => 2, 'product_id' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['category_id' => 2, 'product_id' => 3, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['category_id' => 2, 'product_id' => 4, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['category_id' => 2, 'product_id' => 5, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['category_id' => 2, 'product_id' => 6, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['category_id' => 2, 'product_id' => 7, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['category_id' => 2, 'product_id' => 8, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['category_id' => 2, 'product_id' => 9, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
        ];

        DB::table('category_product')->insert($categoryProductPivotData);


        $variationData = [
            // Carharrt (variation_id => (1 ~ 5))
            ['product_id' => 1, 'title' => 'Camo', 'price' => 12500, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 1, 'title' => '9', 'price' => 12500, 'type' => 'size', 'sku' => 'ab', 'parent_id' => 1, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 1, 'title' => 'Brown', 'price' => 12000, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 1, 'title' => '8', 'price' => 12000, 'type' => 'size', 'sku' => 'cd', 'parent_id' => 3, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 1, 'title' => '9', 'price' => 12500, 'type' => 'size', 'sku' => 'ef', 'parent_id' => 3, 'order' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            
            // Commes des Garcons (variation_id => (6 ~ 11))
            ['product_id' => 2, 'title' => 'Blue', 'price' => 12500, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 2, 'title' => '11', 'price' => 12500, 'type' => 'size', 'sku' => 'gh', 'parent_id' => 6, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 2, 'title' => 'Black', 'price' => 12500, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 2, 'title' => '11', 'price' => 12500, 'type' => 'size', 'sku' => 'ij', 'parent_id' => 8, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 2, 'title' => 'White', 'price' => 12500, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 3, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 2, 'title' => '10', 'price' => 12500, 'type' => 'size', 'sku' => 'kl', 'parent_id' => 10, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
    
            // Chuck 70s (variation_id => (12 ~ 17))
            ['product_id' => 3, 'title' => 'Green', 'price' => 12500, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 3, 'title' => '9', 'price' => 12500, 'type' => 'size', 'sku' => 'mn', 'parent_id' => 12, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 3, 'title' => 'Black', 'price' => 12500, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 3, 'title' => '10', 'price' => 12500, 'type' => 'size', 'sku' => 'op', 'parent_id' => 14, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 3, 'title' => 'Blue', 'price' => 12500, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 3, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 3, 'title' => '11', 'price' => 12500, 'type' => 'size', 'sku' => 'qr', 'parent_id' => 16, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],

            // Chuck 70s Low (variation_id => (18 ~ 23))
            ['product_id' => 4, 'title' => 'Gray', 'price' => 21000, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 4, 'title' => '10', 'price' => 21000, 'type' => 'size', 'sku' => 'st', 'parent_id' => 18, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 4, 'title' => 'Purple', 'price' => 20000, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 4, 'title' => '11', 'price' => 20000, 'type' => 'size', 'sku' => 'uv', 'parent_id' => 20, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 4, 'title' => 'Black', 'price' => 20000, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 3, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 4, 'title' => '9', 'price' => 20000, 'type' => 'size', 'sku' => 'wx', 'parent_id' => 22, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],

            // Chuck Taylor (variation_id => (24 ~ 27))
            ['product_id' => 5, 'title' => 'Black', 'price' => 9000, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 5, 'title' => '9', 'price' => 9000, 'type' => 'size', 'sku' => 'yz', 'parent_id' => 24, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 5, 'title' => 'White', 'price' => 9000, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 5, 'title' => '8', 'price' => 9000, 'type' => 'size', 'sku' => 'ab1', 'parent_id' => 26, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],

            // Converse Pink (variation_id => (28 ~ 31))
            ['product_id' => 6, 'title' => 'Pink', 'price' => 11000, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 6, 'title' => '8', 'price' => 11000, 'type' => 'size', 'sku' => 'cd1', 'parent_id' => 28, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 6, 'title' => '9', 'price' => 11000, 'type' => 'size', 'sku' => 'ef1', 'parent_id' => 28, 'order' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 6, 'title' => '11', 'price' => 11000, 'type' => 'size', 'sku' => 'gh1', 'parent_id' => 28, 'order' => 3, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],

            // Jack Purcell (variation_id => (32 ~ 37))
            ['product_id' => 7, 'title' => 'Blue', 'price' => 6000, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 7, 'title' => '9', 'price' => 6000, 'type' => 'size', 'sku' => 'ij1', 'parent_id' => 32, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 7, 'title' => 'Black', 'price' => 6000, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 7, 'title' => '10', 'price' => 6000, 'type' => 'size', 'sku' => 'kl1', 'parent_id' => 34, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 7, 'title' => 'Brown', 'price' => 6500, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 3, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 7, 'title' => '11', 'price' => 6500, 'type' => 'size', 'sku' => 'mn1', 'parent_id' => 36, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],

            // Converse One Star (variation_id => (38 ~ 43))
            ['product_id' => 8, 'title' => 'Purple', 'price' => 25000, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 8, 'title' => '8', 'price' => 25000, 'type' => 'size', 'sku' => 'op1', 'parent_id' => 38, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 8, 'title' => 'Magenta', 'price' => 25000, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 8, 'title' => '9', 'price' => 25000, 'type' => 'size', 'sku' => 'qr1', 'parent_id' => 40, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 8, 'title' => 'Pink', 'price' => 26000, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 3, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 8, 'title' => '8', 'price' => 26000, 'type' => 'size', 'sku' => 'st1', 'parent_id' => 42, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            
            // Converse Run Star Hike (variation_id => (44 ~ 53))
            ['product_id' => 9, 'title' => 'White', 'price' => 9000, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 9, 'title' => '8', 'price' => 9000, 'type' => 'size', 'sku' => 'uv1', 'parent_id' => 44, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 9, 'title' => '9', 'price' => 9000, 'type' => 'size', 'sku' => 'wx1', 'parent_id' => 44, 'order' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 9, 'title' => '10', 'price' => 9000, 'type' => 'size', 'sku' => 'yz1', 'parent_id' => 44, 'order' => 3, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 9, 'title' => 'Camo', 'price' => 9000, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 9, 'title' => '9', 'price' => 9000, 'type' => 'size', 'sku' => 'ab2', 'parent_id' => 48, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 9, 'title' => '10', 'price' => 9000, 'type' => 'size', 'sku' => 'cd2', 'parent_id' => 48, 'order' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 9, 'title' => 'Gray', 'price' => 9000, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 3, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 9, 'title' => '8', 'price' => 9000, 'type' => 'size', 'sku' => 'ef2', 'parent_id' => 51, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 9, 'title' => '9', 'price' => 9000, 'type' => 'size', 'sku' => 'fg2', 'parent_id' => 51, 'order' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
        ];

        Variation::insert($variationData);


        $stockData = [
            // Carharrt
            ['variation_id' => 2, 'amount' => 11, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 3, 'amount' => 8, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 5, 'amount' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],

            // Commes des Garcons
            ['variation_id' => 7, 'amount' => 9, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 9, 'amount' => 9, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 11, 'amount' => 4, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],

            // Chuck 70s
            ['variation_id' => 13, 'amount' => 10, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 15, 'amount' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 17, 'amount' => 20, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],

            // Chuck 70s Low
            ['variation_id' => 19, 'amount' => 4, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 21, 'amount' => 20, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 23, 'amount' => 15, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],

            // Chuck Taylor
            ['variation_id' => 25, 'amount' => 11, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 27, 'amount' => 12, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],

            // Converse Pink
            ['variation_id' => 29, 'amount' => 5, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 30, 'amount' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 31, 'amount' => 9, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],

            // Jack Purcell
            ['variation_id' => 33, 'amount' => 12, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 35, 'amount' => 3, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 37, 'amount' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],

            // Converse One Star
            ['variation_id' => 39, 'amount' => 20, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 41, 'amount' => 13, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 43, 'amount' => 18, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],

            // Converse Run Star Hike
            ['variation_id' => 45, 'amount' => 9, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 46, 'amount' => 8, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 47, 'amount' => 5, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 49, 'amount' => 10, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 50, 'amount' => 10, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 52, 'amount' => 7, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 53, 'amount' => 3, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
        ];

        Stock::insert($stockData);

        $shippingTypeData = [
            ['title' => 'UPS Free', 'price' => 0, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['title' => 'UPS Standard', 'price' => 2000, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['title' => 'UPS Premium', 'price' => 3000, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
        ];

        ShippingType::insert($shippingTypeData);
    }
}
