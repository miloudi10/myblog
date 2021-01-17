<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $faker = Factory::create();
        for($i=0 ;$i<26; $i++){
            Article::create([
                'title' => $faker->sentence(),
                'subtitle' => $faker->sentence(),
                'content' => $faker->Text($maxNbchars = 500)
            ]);
        }
        
    }
}