<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = config('comics');

        foreach ($data as $d) {
            $comic = new Comic();

            $comic->title = $d['title'];
            $comic->description = $d['description'];
            $comic->thumb = $d['thumb'];
            $comic->price = $d['price'];
            $comic->series = $d['series'];
            $comic->sale_date = $d['sale_date'];
            $comic->type = $d['type'];
            // Transform array artists in string
            $artistsString = implode(',', $d['artists']);
            $comic->artists = $artistsString;
            // Transform array writers in string
            $writersString = implode(',', $d['writers']);
            $comic->writers = $writersString;

            $comic->save();
        }
    }
}
