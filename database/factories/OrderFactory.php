<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Models\Order::class, function (Faker $faker) {
    return [
       'status' => $faker->randomElement(['pending','delivered']), //sortei os dois elementos
       'paid' => $faker->boolean(50),  //50% de chance
       'track_code' => md5(uniqid(rand(),true)) //cria um hash
    ];
});
