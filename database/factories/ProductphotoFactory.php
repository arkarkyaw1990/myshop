<?php

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(App\Models\Productphoto::class, function (Faker $faker) {
    return [
        'product_id' => function(){
    		return Product::all()->random();
    	},
    	'path' => $faker->imageUrl($width = 800, $height = 800),
    ];
});
