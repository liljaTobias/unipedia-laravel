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
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Course::class, function(Faker\Generator $faker){
	return[
		'name' => $faker->name,
		'code' => $faker->word,
		//'school' => $faker->company,
		'created_at' => Carbon\Carbon::now(),
		'updated_at' => Carbon\Carbon::now(),
	];
});

$factory->define(App\School::class, function(Faker\Generator $faker){
	return[
		'name' => $faker->name,
		'country' => $faker->country,
		'created_at' => Carbon\Carbon::now(),
		'updated_at' => Carbon\Carbon::now(),
	];
});

$factory->define(App\Post::class, function(Faker\Generator $faker){
	return[
		'title' => $faker->sentence(3),
		'content' => $faker->paragraph(6),
		'course_id' => $faker->numberBetween(0, 5),
		'user_id' => $faker->numberBetween(0, 5),
		'created_at' => Carbon\Carbon::now(),
		'updated_at' => Carbon\Carbon::now(),
	];
});
