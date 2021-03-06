<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ticket;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Ticket::class, function (Faker $faker) {
    return [
        'ticket_subject' => $faker->company,
        'ticket_body' => $faker->text,
        'ticket_category' => $faker->randomElement(['Android Basic', 'Customer Support', 'Joomla Theme Setup', 'PHP Basic', 'PHP Setup', 'Sales', 'WordPress Theme Setup']),
        'priority' => $faker->randomElement(['Low', 'Medium', 'High', 'Urgent']),
        'status' => 'New',
        'assigned_on_id' => 1,
        'created_at' => now(),
        'updated_at' => now()
    ];
});
