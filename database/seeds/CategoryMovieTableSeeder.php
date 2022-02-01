<?php

use App\Category;
use App\Movie;
use Illuminate\Database\Seeder;

class CategoryMovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = Movie::all();
        $categories = Category::pluck("id");
        foreach ($movies as $movie) {
            $randomCategory = rand(1, count($categories));
            $categories->shuffle();
            $movieCategories= $categories->slice($randomCategory);
            $movie->categories()->attach($movieCategories);
        }
    }
}

       
        
        


        



