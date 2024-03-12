<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Author;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 4; $i++) {
            Author::create([
                'name' => $faker->name,
            ]);
        }

        for ($i = 0; $i < 20; $i++) {
            $title = $faker->sentence;
            $text = $faker->paragraphs(3, true);
            $created_at = $faker->dateTimeBetween('-2 weeks', 'now');

            Article::create([
                'author_id' => $faker->numberBetween(1, 4),
                'title' => $title,
                'text' => $text,
                'created_at' => $created_at,
                'updated_at' => $created_at,
            ]);
        }
    }
}
