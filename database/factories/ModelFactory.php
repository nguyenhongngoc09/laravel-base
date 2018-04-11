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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Core\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Core\Models\Contributor::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'role' => 2
    ];
});

$factory->define(App\Core\Models\UserProfile::class, function (Faker\Generator $faker) {
    return [
        'user_id' => factory(App\Core\Models\User::class)->create()->id,
        'nickname' => $faker->name,
        'firstname' => $faker->firstname,
        'lastname' => $faker->lastname,
        'gender' => round(rand(0, 1) + 1),
        'birthday' => $faker->dateTimeBetween(),
        'job' => $faker->jobTitle,
        'plan_id' => 1,
        'plan_regist_date' => date('Y-m-d')
    ];
});