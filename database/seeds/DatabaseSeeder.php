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
         $this->call(FilmsGenresTableSeeder::class);
         factory(App\Models\Films::class, 100)->create();
    }
}
