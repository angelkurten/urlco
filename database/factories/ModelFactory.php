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

$factory->define(App\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName . ' ' . $faker->lastName,
        'username' => $faker->userName,
        'twitter_id' => $faker->phoneNumber,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'slug'=>$faker->slug,
    ];
});

$factory->define(App\Entities\Url::class, function (\Faker\Generator $faker){
    return [
        'name'  => $faker->text(15),
        'description' => $faker->text(249),
        'url'   => $faker->url,
        'user_id'   => $faker->numberBetween(1, 50),
        'privacy'   => $faker->randomElement(['private', 'public']),
        'slug'=>$faker->slug,
    ];
});

$factory->define(App\Entities\Folder::class, function (\Faker\Generator $faker){
    return [
        'name'  => $faker->text(10),
        'description' => $faker->text(249),
        'user_id'   => $faker->numberBetween(1, 50),
        'privacy'   => $faker->randomElement(['private', 'public']),
        'slug'=>$faker->slug,
    ];
});

$factory->define(App\Entities\Category::class, function (\Faker\Generator $faker){
    return [
        'name'  => $faker->text(10),
        'slug'=>$faker->slug,
    ];
});


