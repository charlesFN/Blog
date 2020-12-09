<?php

use Faker\Generator as Faker;

$factory->define(App\Blogpost::class, function(Faker $faker)
{
    static $password;

    return[
        'title' => Str::random(5),
        'content' => Str::random(10)
    ];
});