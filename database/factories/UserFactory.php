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

/*$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});*/

// Define factory for Teacher
$factory->define(App\Teacher::class, function (Faker $faker) {
    $description = $faker->text();
    $birthday = $faker->date();
    $gender = $faker->randomElement(array('m','f'));

    return [
        'id' => $faker->unique()->randomDigit,
        'name' => $faker->name,
        'description' => $description,
        'birthday' => $birthday,
        'gender' => $gender,
        'address' => $faker->address,
        'phone' => $faker->e164PhoneNumber,
        'specialize' => $faker->sentence($nbWords = 10, $variableNbWords = true),
        'image' => $faker->imageUrl($width = 200, $height = 400),
        'identity_card' => $faker->creditCardNumber,
        'email' => $faker->safeEmail,
    ];
});

// Define factory for Organization
$factory->define(App\Organization::class, function (Faker $faker) {
    $name = $faker->name;
    $description = $faker->text();
    $address = $faker->address;
    $phone = $faker->e164PhoneNumber;
    $email = $faker->safeEmail;
    $website = $faker->url;
    $image = $faker->imageUrl(200, 400);


    return [
        'id' => $faker->unique()->randomDigit,
        'name' => $name,
        'description' => $description,
        'address' => $address,
        'phone' => $phone,
        'email' => $email,
        'website' => $website,
        'image' => $image,
    ];
});

// Define factory for Review
$factory->define(App\Review::class, function (Faker $faker) {
    $name = str_random(20);
    $description = $faker->text();
    $date = $faker->date();
    $status = $faker->randomElement(array('1','0'));
    $voting_helpful = $faker->randomDigit;
    $rating = $faker->numberBetween(1,5);

    return [
        'id' => $faker->unique()->randomDigit,
        'name' => $name,
        'description' => $description,
        'date' => $date,
        'status' => $status,
        'voting_helpful' => $voting_helpful,
        'rating' => $rating,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'teacher_id' => function () {
            return factory(App\Teacher::class)->create()->id;
        }
    ];
});

// Define factory for TeacherOrganization
$factory->define(App\Teacher::class, 'teacher_organization' , function (Faker $faker) {
    return [
        'id' => $faker->unique()->randomDigit,
        'teacher_id' => function () {
            return factory(App\Teacher::class)->create()->id;
        },
        'organization_id' => function () {
            return factory(App\Organization::class)->create()->id;
        }
    ];
});

// Define factory for UserOrganization
$factory->define(App\User::class, 'user_organization' , function (Faker $faker) {
    return [
        'id' => $faker->unique()->randomDigit,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'organization_id' => function () {
            return factory(App\Organization::class)->create()->id;
        }
    ];
});

