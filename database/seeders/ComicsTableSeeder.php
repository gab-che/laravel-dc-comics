<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $comics = config('comics');

        // foreach ($comics as $comic) {
        //     $new_comic = new Comic();
        //     $new_comic->title = $comic['title'];
        //     $new_comic->description = $comic['description'];
        //     $new_comic->thumb = $comic['thumb'];
        //     $new_comic->price = $comic['price'];
        //     $new_comic->series = $comic['series'];
        //     $new_comic->sale_date = $comic['sale_date'];
        //     $new_comic->type = $comic['type'];
        //     $new_comic->save();
        // }

        if ($open_file = fopen(storage_path('app/more_comics.csv'), 'r')) {
            while ($data = fgetcsv($open_file, 1000, ',')) {
                $more_comics[] = $data;
            }
            fclose($open_file);
        }

        foreach ($more_comics as $key => $array) {
            foreach ($array as $key => $value) {
                $new_comic = str_replace('*', '', $value);
                $new_comics[] = $new_comic;
            }
        }

        foreach ($new_comics as $comic) {
            $new_comic = new Comic;
            $new_comic->title = $comic;
            $new_comic->description = 'no description';
            $new_comic->thumb = 'no img found';
            $new_comic->price = 0;
            $new_comic->series = 'unknown';
            $new_comic->sale_date = '1990-12-12';
            $new_comic->type = 'unknown';
            $new_comic->save();
        }
    }
}
