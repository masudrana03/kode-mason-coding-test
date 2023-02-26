<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\TopUps;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // production Code
        $randomTop = rand(401, 600);

        for ($i = 0; $i < 510; $i++) {
            User::factory()->has(
                TopUps::factory()->count($randomTop)
            )->create();
        }

        // testing Code
        // $randomTop = rand(2, 10);

        // for ($i = 0; $i < 10; $i++) {
        //     User::factory()->has(
        //         TopUps::factory()->count($randomTop)
        //     )->create();
        // }

        // TopUps::factory(20)->create();
    }
}