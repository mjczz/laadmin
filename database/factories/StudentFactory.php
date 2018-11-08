<?php

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

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'student_name' => $faker->name,
        'grade' => $faker->numberBetween(1,13),
        'student_code' => $faker->numberBetween(1,8),
        'address' => $faker->name,
        'mobile' => $faker->phoneNumber,
        'parent_name' => $faker->name,
        'parent_mobile' => $faker->phoneNumber,
        'city' => $faker->numberBetween(1,9),
		'gender' => rand(0,2),
		'status' => rand(0,5),
    ];
});
