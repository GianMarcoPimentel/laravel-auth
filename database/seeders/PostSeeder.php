<?php

namespace Database\Seeders;

//aggiunto
use App\Models\Post;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //       
        
       /*  $newPost = new Post();
        
        for($i=0; $i<10; $i++){
            
            $newPost->name = $faker->name();
            $newPost->description = $faker->text();
            $newPost->src = $faker->text();
            $newPost->used_technologies = $faker->words();
            $newPost->link = $faker->text();
            
           
            $newPost->save();
        }; */
        

        $newPost = new Post();
        $newPost->name = "Booleando";
        $newPost->description = "esercizio simile alla pagina zalando";
        $newPost->src = "https://i.pinimg.com/564x/40/e7/3b/40e73b247e91b2fe4d2a040b40c9ae86.jpg";
        $newPost->used_technologies = "html e css";
        $newPost->link = "https://www.wikipedia.org/";

        // una volta che compiliamo i campi dobbiamo salvare la riga per applicare le modifiche
        $newPost->save();

    }
}
