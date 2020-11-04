<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {

          $author = new Author();

          $author->name = $faker->firstName(null);
          $author->surname = $faker->lastName();

          $author->save();
        }
    }
}
