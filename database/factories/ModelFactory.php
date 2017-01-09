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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    $states = array(
        'Andalucia',
        'Madrid',
        'Cataluña',
        'Castilla y León',
        'Castilla y La Mancha',
        'Galicia',
        'Aragón',
        'Cantabria',
        'Asturias',
        'Valencia',
        'Murcia',
        'Extremadura',
        'Rioja',
        'Navarra',
        'País Vasco',
        'Baleares',
        'Canarias',
        'Ceuta',
        'Melilla',
    );

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'age' => rand(18,65),
        'state' => $states[rand(0,18)],
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Vote::class, function (){

    return [

        'option_id' => factory(App\Models\Option::class)->create()->id,
        'user_id' => factory(App\Models\User::class)->create()->id,

    ];
});

$factory->define(App\Models\Survey::class, function (Faker\Generator $faker){

    return [

        'name' => $faker->company,
    ];
});

$factory->define(App\Models\Option::class, function (Faker\Generator $faker){

    return [

        'name' => $faker->company,
        'survey_id' => factory(App\Models\Survey::class)->create()->id,

    ];
});

