<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

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

$factory->define(App\Prepay::class, function (Faker $faker) {
    return [
        'prepay_type' => $faker->numberBetween(1,2),
        'prepay_flag' => $faker->numberBetween(0,2),
        'prepay_total' => $faker->numberBetween(0,10000),
		'prepay_time' => strtotime(Carbon::create()),
        'reason' => $faker->text,
        'prepay_number' => $faker->numerify('23423499193'),
    ];
});
