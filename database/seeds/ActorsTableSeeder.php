<?php

use App\Actor;
use Illuminate\Database\Seeder;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "first_name" => "Leonardo",
                "last_name" => "Di Caprio"
            ],
            [
                "first_name" => "Tom",
                "last_name" => "Holland"
            ],
            [
                "first_name" => "Brad",
                "last_name" => "Pitt"
            ],
            [
                "first_name" => "Robert",
                "last_name" => "De Niro"
            ],
        ];

        foreach ($data as $value) {
            $newValue = new Actor();

            $newValue->first_name = $value["first_name"];
            $newValue->last_name = $value["last_name"];

            $newValue->save();
        }
    }
}
