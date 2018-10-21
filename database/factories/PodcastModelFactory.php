<?php

use App\Podcasts\Podcast;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Podcast::class, function(Faker\Generator $faker){
  return [
    'url' => $faker->url,
    'title' => $faker->title,
    'description' => $faker->text,
    'episode_number' => $faker->buildingNumber,
  ];
});
