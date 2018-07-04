<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Admin::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => function(){
        	return Hash::make('jajoker');
        },
        'role' => $faker->randomElement($array = array ('Super Admin','Admin','Editor')),
    ];
});
