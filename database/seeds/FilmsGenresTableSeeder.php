<?php

use Illuminate\Database\Seeder;

class FilmsGenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tables = [];
        for ($i = 0;$i<10;$i++){
            $tables[$i] = [
                'genre' => Str::random(5).'Genre'
            ];
        }
        DB::table('films_genres')->insert($tables);

        
    }
}
