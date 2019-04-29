<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //aqui creamos la estructura de lo que creamo en la tabla de migracion de producto

        'name' => $faker->sentence,
        'description'=> $faker->sentence
    ];
});
