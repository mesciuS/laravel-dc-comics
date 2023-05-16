<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayComics = config('comics');
        foreach($arrayComics as $singleComic) {
            $newComic = new Comic();

            $newComic->title = $singleComic['title'];
            $newComic->title = $singleComic['description'];
            $newComic->title = $singleComic['thumb'];
            $newComic->title = $singleComic['price'];
            $newComic->title = $singleComic['series'];
            $newComic->title = $singleComic['sale_date'];
            $newComic->title = $singleComic['type'];
            $newComic->writers = implode(',', $singleComic['artists']);
            $newComic->writers = implode(',', $singleComic['writers']);

            $newComic->save();
        }
    }
}
