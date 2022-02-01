<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $movie = new Movie();
            $movie->title = $faker->sentence(3);
            $movie->description = $faker->text(50);
            $movie->rating = $faker->randomFloat(2, 0, 9);
            $movie->published_at = $faker->date();
            $movie->duration_minutes = $faker->numberBetween(40, 300);
            $movie->pegi_id = $faker->numberBetween(1, 4);
            $movie->cover_path = $faker->imageUrl(640, 480, 'animals', true);
            $movie->trailer_path = $faker->imageUrl(640, 480, 'animals', true);

            $movie->save();
        }
    }
}
