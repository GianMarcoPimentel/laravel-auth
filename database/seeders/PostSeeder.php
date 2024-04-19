<?php

namespace Database\Seeders;

//aggiunto
use App\Models\Post;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//importo il faker
use Faker\Generator as Faker;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //       
        
        $newPost = new Post();
        
        for($i=0; $i<10; $i++){
            
            $newPost->name = $faker->name();
            $newPost->description = $faker->text();
            $newPost->src = $faker->text();
            $newPost->used_technologies = $faker->words();
            $newPost->link = $faker->text();
            
           
            $newPost->save();
        };
        
        for($i = 0; $i < 10; $i++){

            $newPost = new Post();

            $newPost->name = $faker->name();
            $newPost->description = $faker->text();
            $newPost->src = $faker->imageUrl(640,480,null);
            $newPost->used_technologies = $faker->word();
            $newPost->link = $faker->url();

            // una volta che compiliamo i campi dobbiamo salvare la riga per applicare le modifiche
            $newPost->save();
        }
    }
}
