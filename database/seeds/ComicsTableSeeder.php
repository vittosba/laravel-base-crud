<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $comic) {
            $new_comic = new Comic();

            $new_comic->title = $comic['title'];
            $new_comic->slug = Str::slug($new_comic->title, '-');
            $new_comic->description = $comic['description'];
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];

            $new_comic->save();
        }
    }
}