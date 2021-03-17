<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\NewsItem;
use Faker\Generator as Faker;

$factory->define(NewsItem::class, function (Faker $faker) {
    return [
        'category_id' => factory(Category::class)->create(),
        'title' => $faker->title,
        'body' => $faker->paragraph,
    ];
});
