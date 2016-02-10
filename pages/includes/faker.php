<?php

require_once '../vendor/fzaninotto/faker/src/autoload.php';

$faker = Faker\Factory::create();
$faker->addProvider(new Faker\Provider\it_IT\PhoneNumber($faker));
$faker->addProvider(new Faker\Provider\it_IT\Person($faker));
$faker->addProvider(new Faker\Provider\it_IT\Internet($faker));
$faker->addProvider(new Faker\Provider\DateTime($faker));

$idUtente = rand(1, 1000);
