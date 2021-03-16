<?php

use Illuminate\Database\Seeder;
use App\NewsItem;

class NewsItemsTableSeeder extends Seeder
{
    const NEWS_ITEMS_COUNT = 4;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < self::NEWS_ITEMS_COUNT; $i++) {
            $ni = new NewsItem;
            $ni->title = Str::random(10);
            $ni->body = Str::random(400);

            $ni->save();
        }
    }
}
