<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;
use App\AuthorInfo;

class AuthorsInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $authors = Author::all();

        foreach ($authors as $author) {

          $authorInfo = new AuthorInfo();

          $authorInfo->author_id = $author->id;
          $authorInfo->nationality = $faker->country();
          $authorInfo->bio = $faker->paragraph(5, true);

          if (rand(0, 1) == 1) {
            $authorInfo->image = $faker->imageUrl(200, 300);
            $authorInfo->alive = 1;

          }

          $authorInfo->save();
        }
    }
}
