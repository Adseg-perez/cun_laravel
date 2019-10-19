<?php

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
        $this->call(BlogSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(EstudianteSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(BancoSeeder::class);
        $this->call(PersonaSeeder::class);
    }
}
