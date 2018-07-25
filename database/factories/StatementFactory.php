<?php

use Faker\Generator as Faker;

$factory->define(App\Statement::class, function (Faker $faker) {
    return [
        // Fakerクラスの$fakerインスタンスにはダミーデータを生成するメソッドが用意されている
        'title'     => $faker->realText($maxNbChars = 10, $indexSize = 1),
        'who'       => $faker->name,
        'statement' => $faker->realText($maxNbChars = 20, $indexSize = 1),
    ];
});
