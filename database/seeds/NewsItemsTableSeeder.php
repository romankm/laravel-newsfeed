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
        factory(NewsItem::class, self::NEWS_ITEMS_COUNT)->create();
    }
}
