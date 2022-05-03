<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ShippingType;
use App\Models\Stock;
use App\Models\Variation;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ['title' =>'Seasons', 'slug'=> 'seasons', 'parent_id' => null, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['title' =>'Nike', 'slug'=> 'nike', 'parent_id' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['title' =>'Winter', 'slug'=> 'winter', 'parent_id' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['title' =>'Spring', 'slug'=> 'spring', 'parent_id' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['title' =>'New arrival', 'slug'=> 'new-arrival', 'parent_id' => 3, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
        ];

        Category::insert($categoryData);


        $productData = [
            ['title' =>'Nike Air Force 1', 'slug'=> 'nike-air-force-1', 'description' => 'insert product description here', 'price' => 9000, 'live_at' => Carbon::now()->toDateTimeString(), 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['title' =>'Example Product', 'slug'=> 'example-product', 'description' => 'example product description here', 'price' => 15000, 'live_at' => Carbon::now()->toDateTimeString(), 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
        ];

        Product::insert($productData);


        $categoryProductPivotData = [
            ['category_id' => 3, 'product_id' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['category_id' => 6, 'product_id' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['category_id' => 3, 'product_id' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
        ];

        DB::table('category_product')->insert($categoryProductPivotData);


        $variationData = [
            ['product_id' => 1, 'title' => 'Black', 'price' => 9000, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 1, 'title' => 'White', 'price' => 9500, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 1, 'title' => '8', 'price' => 9000, 'type' => 'size', 'sku' => 'abc', 'parent_id' => 1, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 1, 'title' => '9', 'price' => 9000, 'type' => 'size', 'sku' => 'def', 'parent_id' => 1, 'order' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 1, 'title' => '8', 'price' => 9500, 'type' => 'size', 'sku' => 'ghi', 'parent_id' => 2, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 1, 'title' => '10', 'price' => 11000, 'type' => 'size', 'sku' => 'jkl', 'parent_id' => 2, 'order' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 2, 'title' => 'Rainbow', 'price' => 15000, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 2, 'title' => '14', 'price' => 15500, 'type' => 'size', 'sku' => 'mno', 'parent_id' => 7, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 1, 'title' => 'Rainbow', 'price' => 15000, 'type' => 'color', 'sku' => null, 'parent_id' => null, 'order' => 3, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['product_id' => 1, 'title' => '14', 'price' => 15500, 'type' => 'size', 'sku' => 'qrs', 'parent_id' => 9, 'order' => 1, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
        ];

        Variation::insert($variationData);


        $stockData = [
            ['variation_id' => 4, 'amount' => 11, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 6, 'amount' => 8, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 10, 'amount' => 2, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
            ['variation_id' => 8, 'amount' => 9, 'created_at' => Carbon::now()->toDateTimeString(), 'updated_at' => Carbon::now()->toDateTimeString()],
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
