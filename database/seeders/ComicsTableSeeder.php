<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recupera il contenuto del file comics dalla cartella config
        $comics = config('comics');

        // Ciclo il contenuto della variabile comics (array di fumetti)
        foreach ($comics as $comic) {
            $new_comic = new Comic();

            // Assegna i dati del fumetto
            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];

            // Concateno gli array di artisti e scrittori in una stringa
            $new_comic->artists = implode(', ', $comic['artists']);
            $new_comic->writers = implode(', ', $comic['writers']);

            // Salva il nuovo fumetto nel database
            $new_comic->save();
        }
    }
}
