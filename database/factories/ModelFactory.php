<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Student::class, function (Faker\Generator $faker) {

    $firstName = $faker->firstName;
    $lastName = $faker->lastName;
    $slug = str_slug($firstName . ' ' . $lastName, "-");


    return [
        'first_name' => $firstName,
        'last_name' => $lastName,
        'dob' => $faker->date,
        'slug' => $slug

    ];
});
