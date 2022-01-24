<?php

use App\Pegi;
use Illuminate\Database\Seeder;

class PegiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "T",
            "6+",
            "14+",
            "18+"
        ];

        foreach ($data as $value) {
            $newValue = new Pegi();
            $newValue->name = $value;
            $newValue->save();
        }
    }
}
