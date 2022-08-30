<?php

use App\tags;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 

            $data = new tags;

            $data->name = $faker->name();

            $data->save();
        }
    }
}
