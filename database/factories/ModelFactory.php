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
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$fakerBr = Faker\factory::create('pt_BR');
$factory->define(App\meuModel::class, function (Faker\Generator $faker) use ($fakerBr) {
    return [
        'user_id' => '1',
        'nome' => $fakerBr->name,
        'telefone'=> $fakerBr->phonenumber,
        'email' => $fakerBr->safeEmail,
        'estado' => $fakerBr->stateAbbr,
        'dataNascimento' => $fakerBr->date($format = 'Y-m-d'),
        'cidade' => $fakerBr->city,
        'endereco'=>$fakerBr->streetAddress,
    ];
});
