<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;
use \App\Models\Tweet;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'karel',
            'email' => 'asselman.karel@gmail.com',
            'password' => Hash::make('123456')
        ]);

        User::factory()->create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('123456')
        ]);

        $faker = \Faker\Factory::create();

        Tweet::factory(5)->create([
            'user_id' => User::where('name', 'karel')->first()->id,
            'body' => $faker->realText($maxNbChars = 200, $indexSize = 2)
        ]);
    }
}
