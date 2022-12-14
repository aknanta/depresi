<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GejalaSeeder::class,
            PenyakitSeeder::class,
            RulesSeeder::class,
            UserSeeder::class,
        ]
        );
        // \App\Models\User::factory(10)->create();
    }
}
