<?php

use Illuminate\Database\Seeder;
use App\NewsItem;
use Illuminate\Support\Str;

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
        factory(NewsItem::class, 5)->create();

//        NewsItem::factory()
//            ->count(50)
//            ->hasPosts(1)
//            ->create();
////        $factory->define(App\NewsItem::class, function (Faker\Generator $faker) {
////            return [
////                'title' => $faker->name,
////                'body' => $faker->email,
////                'password' => bcrypt(str_random(10)),
////                'remember_token' => str_random(10),
////            ];
////        });
//
//        factory(NewsItem::class, self::NEWS_ITEMS_COUNT)->create()->each(function (NewsItem $ni) {
//            $ni->category()->associate();
//        });

//        for ($i = 1; $i < self::NEWS_ITEMS_COUNT; $i++) {
//            $ni = new NewsItem;
//            $ni->title = Str::random(10);
//            $ni->body = Str::random(400);
//
//            $ni->save();
//        }
    }
}
