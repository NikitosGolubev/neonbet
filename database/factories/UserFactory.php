<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

$factory->define(User::class, function (Faker $faker) {
    return [
        'nickname' => $faker->unique()->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => 'secret',
        'fullname' => $faker->firstName.' '.$faker->lastName,
        'birthdate' => $faker->date('d.m.Y', Carbon::create(2000, 1, 1, 0, 0, 0)->timestamp),
        'verified_at' => getVerifiedAt()
    ];
});

/**
 * Provides verification value depend on chance.
 */
function getVerifiedAt($verification_chance = 50) {
   $random_int = rand(1, 100);

   if ($random_int <= $verification_chance) {
       return Carbon::now()->toDateTimeString();
   }

   return null;
}