<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "Horror",
            "Fantasy",
            "Adventure",
            "Action",
            "Thriller",
            "Romantic"
        ];

        foreach ($data as $value) {
            $newValue = new Category();
            $newValue->name = $value;
            $newValue->save();
        }
    }
}
