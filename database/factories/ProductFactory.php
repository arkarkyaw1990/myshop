<?php

use App\Models\Admin;
use App\Models\Category;
use App\Models\Brand;
use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'admin_id' => function(){
    		return Admin::all()->random();
    	},
    	'category_id' => function(){
    		return Category::all()->random();
    	},
    	'brand_id' => function(){
    		return Brand::all()->random();
    	},
        'name' => $faker->word,
        'quick_overview' => $faker->sentence,
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween(100, 100000),
        'discount' => $faker->numberBetween(2, 30),
        'availability' => $faker->numberBetween(0, 2),
        'quantity' => $faker->randomDigit,
    ];
});
